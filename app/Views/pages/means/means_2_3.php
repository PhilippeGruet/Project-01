<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Elemko_Laboratory')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Elemko Laboratory (Greece)</h2>

        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <p>Located in Thiva, Greece, Elemko laboratory is used to realize test according to the european standard EN-5064, CEI-62561.</p>
            <p><a href="http://seftim.clic-droit-tech.com/new/wp-content/uploads/2014/01/Lab-profile-EN.pdf" target="_blank">Laboratory’s presentation</a></p>
            <p><a href="http://seftim.clic-droit-tech.com/new/wp-content/uploads/2014/01/LabUK.pdf" target="_blank">Surge current generator and surge voltage generator</a>
            <p><a href="http://www.elemko.gr/en/index-5a.html" target="_blank">Laboratory’s website</a></p>
        </div>

    </div>
<?php else: ?>
    <div class="row">
        <h2>Laboratoire Elemko (Grèce)</h2>

        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <p>Installé à Thiva, en Grèce, Le laboratoire Elemko est utilisé pour faire des tests selon les normes Européenne EN-50164, CEI-62561.</p>
            <p><a href="http://seftim.clic-droit-tech.com/new/wp-content/uploads/2014/01/Lab-profile-EN.pdf" target="_blank">Présentation du laboratoire (EN)</a></p>
            <p><a href="http://seftim.clic-droit-tech.com/new/wp-content/uploads/2014/01/LabUK.pdf" target="_blank">Générateur de choc de courant et générateur de choc de tension</a>
            <p><a href="http://www.elemko.gr/en/index-5a.html" target="_blank">Site web du laboratoire</a></p>
        </div>
    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
