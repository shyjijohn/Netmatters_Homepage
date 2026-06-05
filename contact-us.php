<?php
// SERVER-SIDE FORM HANDLING
require __DIR__ . '/config/connection.php';           

$errors  = [];
// $success = false;
$values  = ['name' => '', 'company' => '', 'email' => '', 'phone' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $values['name']    = trim($_POST['name']    ?? '');
    $values['company'] = trim($_POST['company'] ?? '');
    $values['email']   = trim($_POST['email']   ?? '');
    $values['phone']   = trim($_POST['phone']   ?? '');
    $values['message'] = trim($_POST['message'] ?? '');

    if ($values['name'] === '')    $errors['name']    = 'Please enter your name.';
    if ($values['email'] === '')   $errors['email']   = 'Please enter your email address.';
    elseif (!filter_var($values['email'], FILTER_VALIDATE_EMAIL))
                                   $errors['email']   = 'Please enter a valid email address.';
    
    if ($values['phone'] === '') {
    $errors['phone'] = 'Please enter your telephone number.';
}
 elseif (!preg_match('/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/', $values['phone'])) {
    $errors['phone'] = 'Please enter a valid telephone number.';
}

    if ($values['message'] === '') $errors['message'] = 'Please enter a message.';

    if (empty($errors)) {
        $stmt = $pdo->prepare(
            "INSERT INTO contacts (name, company, email, phone, message, created_at)
             VALUES (?, ?, ?, ?, ?, NOW())"
        );
        $stmt->execute([
            $values['name'], $values['company'], $values['email'],
            $values['phone'], $values['message'],
        ]);
        header('Location: contact-us.php?sent=1');
        exit;
    }
}

// Safely escape output to prevent XSS.
function e($s) { return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
?>


    <link rel="stylesheet" href="css/components/contact.css">
</head>
<body>

<?php
    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/menu.php';
 ?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <div class="container">
        <a href="index.php">Home</a> / <span>Our Offices</span>
    </div>
</div>

<main class="container">
    <h1 class="page-title">Our Offices</h1>

  <!-- OFFICE CARDS  -->
    <section class="offices">
        <article class="office-card">
            <img src="assets/cambridge.png" alt="Cambridge Office">
            <div class="office-body">
                <h2>Cambridge Office</h2>
                <p>Unit 1.31,<br>St John's Innovation Centre,<br>Cowley Road, Milton,<br>Cambridge,<br>CB4 0WS</p>
                <p class="office-phone">01223 37 57 72</p>
                <a href="#" class="btn btn-purple">View More</a>
            </div>
        </article>

        <article class="office-card">
            <img src="assets/wymondham.png" alt="Wymondham Office">
            <div class="office-body">
                <h2>Wymondham Office</h2>
                <p>Unit 15,<br>Penfold Drive,<br>Gateway 11 Business Park,<br>Wymondham, Norfolk,<br>NR18 0WZ</p>
                <p class="office-phone">01603 70 40 20</p>
                <a href="#" class="btn btn-purple">View More</a>
            </div>
        </article>

        <article class="office-card">
            <img src="assets/yarmouth-2.png" alt="Great Yarmouth Office">
            <div class="office-body">
                <h2>Great Yarmouth Office</h2>
                <p>Suite F23,<br>Beacon Innovation Centre,<br>Beacon Park, Gorleston,<br>Great Yarmouth, Norfolk,<br>NR31 7RA</p>
                <p class="office-phone">01493 60 32 04</p>
                <a href="#" class="btn btn-purple">View More</a>
            </div>
        </article>
    </section>

    <!-- FORM + SIDEBAR  -->
    <section class="contact-section">

        <div class="contact-form-wrap">
            <?php if (isset($_GET['sent'])): ?>
                <div class="alert-success">Thank you. Your enquiry has been sent successfully.</div>
            <?php endif; ?>

            <form action="contact-us.php" method="POST" id="contactForm" novalidate>
                <div class="form-grid">
                    <div class="form-field">
                        <label for="name">Your Name <span class="req">*</span></label>
                        <input type="text" id="name" name="name" value="<?= e($values['name']) ?>">
                        <?php if (isset($errors['name'])): ?><span class="error"><?= e($errors['name']) ?></span><?php endif; ?>
                    </div>
                    <div class="form-field">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company" value="<?= e($values['company']) ?>">
                    </div>
                    <div class="form-field">
                        <label for="email">Your Email <span class="req">*</span></label>
                        <input type="email" id="email" name="email" value="<?= e($values['email']) ?>">
                        <?php if (isset($errors['email'])): ?><span class="error"><?= e($errors['email']) ?></span><?php endif; ?>
                    </div>
                    <div class="form-field">
                        <label for="phone">Your Telephone Number <span class="req">*</span></label>
                        <input type="text" id="phone" name="phone" value="<?= e($values['phone']) ?>">
                        <?php if (isset($errors['phone'])): ?><span class="error"><?= e($errors['phone']) ?></span><?php endif; ?>
                    </div>
                </div>

                <div class="form-field">
                    <label for="message">Message <span class="req">*</span></label>
                    <textarea id="message" name="message" rows="5"><?= e($values['message']) ?></textarea>
                    <?php if (isset($errors['message'])): ?><span class="error"><?= e($errors['message']) ?></span><?php endif; ?>
                </div>

                <label class="checkbox-row">
                    <input type="checkbox" name="marketing">
                    <span>Please tick this box if you wish to receive marketing information from us.
                    Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</span>
                </label>

                <div class="form-footer">
                    <button type="submit" class="btn btn-dark">Send Enquiry</button>
                    <span class="required-note"><span class="req">*</span> Fields Required</span>
                </div>
            </form>
        </div>

        <aside class="contact-sidebar">
            <p class="sidebar-label">Email us on:</p>
            <p class="sidebar-highlight">sales@netmatters.com</p>
            <p class="sidebar-label">Speak to Sales on:</p>
            <p class="sidebar-highlight">01603 515007</p>
            <p class="sidebar-label">Business hours:</p>
            <p>Monday - Friday 07:00 - 18:00</p>
        

        <div class="accordion">
            <button type="button" class="accordion-header" id="oohToggle">
                Out of Hours IT Support <span class="chevron">&#9662;</span>
            </button>
            <div class="accordion-body" id="oohBody">
                <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                <p class="ooh-hours"><strong>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br>
                    Sunday 10:00 - 18:00</strong></p>
                <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
            </div>
        </div>
        </aside>
    </section>
</main>

<?php  include __DIR__ . '/includes/footer.php';  ?>

<script src="js/contact-us.js"></script>


<script>
const alert = document.querySelector('.alert-success');
if (alert) {
    history.replaceState(null, '', 'contact-us.php'); 
    setTimeout(() => {
        alert.style.transition = 'opacity 0.6s';
        alert.style.opacity = '0';
        setTimeout(() => alert.remove(), 600);
    }, 4000); 
}
</script>


</body>
</html>