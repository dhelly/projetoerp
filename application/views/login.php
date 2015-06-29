<!-- Start Formoid form-->
<form class="formoid-solid-blue" action=<?=site_url('login/logar'); ?> 
style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post">
    <div class="title"><h2>ERP - Inútil - Login</h2></div>
    <div class="element-input" title="Login">
        <label class="title"></label>
        <div class="item-cont">
            <input class="large" type="text" name="usuario" placeholder="Login"/>
            <span class="icon-place"></span>
        </div>
    </div>
    <div class="element-password">
        <label class="title"></label>
        <div class="item-cont">
            <input class="large" type="password" name="senha" value="" placeholder="Senha"/>
            <span class="icon-place"></span>
        </div>
    </div>
    <div class="submit"><input type="submit" value="Acessar Sistema"/></div>
    </form>

    <script type="text/javascript" src="<?= base_url(); ?>assets/js/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->
