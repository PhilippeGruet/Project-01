<?php $this->layout('layout', ['title' => getApp()->getLocale('navbar:Shanghai_Lightning_Protection_Center')]) ?>

<?php $this->start('main_content') ?>
<?php if(!isset($_SESSION['locale']) || $_SESSION['locale'] == 'en'): ?>
    <div class="row">
        <h2>Shanghai Lightning Protection Center</h2>

        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <p>Located in Shanghai, the SHLPC is specialized in testing Low tension lightning arrester</p>
            <p>Laboratory introduction : <a href="#" target="_blank">The Introduction Of ShangHai Lightning Protection Center</a></p>
            <p>Laboratory website : <a href="http://www.lightning.sh.cn/" target="_blank" rel="external">http://www.lightning.sh.cn/</a></p>
            <address>
                <p><strong>Shanghai Lightning Protection Center</strong></p>
                上海市松江区涞坊路2030号 201615<br>
                No.2030 Laifang Road, Songjiang District, Shanghai ,P.R.China, 201615<br>
                FAX: <a href="tel:%2B86-21-67697083" target="_blank">+86-21-67697083</a><br>
                TEL: <a href="tel:%2B86-21-67697083" target="_blank">+86-21-67697083</a> （Direct)<br>
                <a href="tel:%2B86-21-67697111%20Ext.%206306" target="_blank">+86-21-67697111 Ext. 6306</a><br>
            </address>
        </div>

    </div>
<?php else: ?>
    <div class="row">
        <h2>Shanghai Lightning Protection Center</h2>

        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <p>Situé à Shanghai, le SHLPC est spécialisé dans le domaine des essais de parafoudre basse tension.</p>
            <p>Présentation du laboratoire : <a href="#" target="_blank">The Introduction Of ShangHai Lightning Protection Center</a></p>
            <p>Site web du laboratoire : <a href="http://www.lightning.sh.cn/" target="_blank" rel="external">http://www.lightning.sh.cn/</a></p>
            <address>
                <p><strong>Shanghai Lightning Protection Center</strong></p>
                上海市松江区涞坊路2030号 201615<br>
                No.2030 Laifang Road, Songjiang District, Shanghai ,P.R.China, 201615<br>
                FAX: <a href="tel:%2B86-21-67697083" target="_blank">+86-21-67697083</a><br>
                TEL: <a href="tel:%2B86-21-67697083" target="_blank">+86-21-67697083</a> （Direct)<br>
                <a href="tel:%2B86-21-67697111%20Ext.%206306" target="_blank">+86-21-67697111 Ext. 6306</a><br>
            </address>
        </div>
    </div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
