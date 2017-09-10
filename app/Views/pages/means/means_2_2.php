<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Shanghai_Lightning_GrandTop')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Shanghai Lightning GrandTop</h2>

        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <p>Shanghai Lightning GrandTop Specialized in lightning’s rod international standard 61643-11-21 tests, especially for test’s mean for development. (Production and design of tests factor from a catalogue or made to measure).</p>
            <p>Laboratory introduction : <a href="#" target="_blank">Shanghai GrandTop Electrical Technology</a></p>
            <p>Laboratory website : <a href="http://www.grandtop.cn/en/" target="_blank" rel="external">http://www.grandtop.cn/en/</a></p>
            <address>
                <p><strong>Room 413, Guangqi Office Tower</strong></p>
                No.425 Yishan Road, Xuhui District<br>
                Shanghai, P.R.China<br>
                FAX: <a href="tel:%2B86-21-34690035" target="_blank">+86-21-34690035</a><br>
                TEL: <a href="tel:%2B86-21-34695500" target="_blank">+86-21-34695500</a><br>
            </address>
        </div>

    </div>
<?php else: ?>
    <div class="row">
        <h2>Shanghai Lightning GrandTop</h2>

        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <p>Shanghai Lightning GrandTop Spécialisé dans les essais de parafoudre Norme Internationale 61643-11-21, en particulier pour le développement de moyen d’essai. (production et design de générateur d’essais sur catalogue et sur mesure.).</p>
            <p>Présentation du laboratoire : <a href="#" target="_blank">Shanghai GrandTop Electrical Technology</a></p>
            <p>Site web du laboratoire : <a href="http://www.grandtop.cn/en/" target="_blank" rel="external">http://www.grandtop.cn/en/</a></p>
            <address>
                <p><strong>Room 413, Guangqi Office Tower</strong></p>
                No.425 Yishan Road, Xuhui District<br>
                Shanghai, P.R.China<br>
                FAX: <a href="tel:%2B86-21-34690035" target="_blank">+86-21-34690035</a><br>
                TEL: <a href="tel:%2B86-21-34695500" target="_blank">+86-21-34695500</a><br>
            </address>
        </div>
    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
