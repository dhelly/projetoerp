<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{TITULO_PAGINA}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Projeto ERP">
  <meta name="author" content="Natacha Targino & Halyne D'Angelo & Jaqueline Fernande">
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
    {CSS_LAYOUT}
    {JS_LAYOUT}
</head>

<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                     <span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                     </button> <a class="navbar-brand" href=<?=site_url('erp/principal')?> >Projeto ERP</a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cliente<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">                                
                                <li>
                                    <a href=<?=site_url('erp/clientes_gerenciamento')?> >Gerenciar Cliente</a>
                                </li>                              
                            </ul>
                        </li>
                    </ul>                   
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fornecedor<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>        
                                    <a href="#">Gerenciar Fornecedor</a>
                                </li>                                
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vendas<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>        
                                    <a href="<?php echo site_url('erp/vendas_gerenciamento')?>">Gerenciar Vendas</a>
                                </li>                                
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produto<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>    
                                    <a href="<?php echo site_url('erp/produtos_gerenciamento')?>">Gerenciar Produtos</a>
                                </li>  
                            </ul>
                        </li>
                    </ul>   
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Filiais<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>    
                                    <a href="<?php echo site_url('erp/filiais_gerenciamento')?>">Gerenciar Filiais</a>
                                </li>  
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Funcionários<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>    
                                    <a href="<?php echo site_url('erp/funcionarios_gerenciamento')?>">Gerenciar Funcionários</a>
                                </li>  
                            </ul>
                        </li>
                    </ul>   
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input class="form-control" type="text">
                            </div> <button type="submit" class="btn btn-default">Pesquisar</button>
                        </form>

                        <li>
                            <a href="<?php echo site_url('login/logout')?>">Sair</a>
                        </li>
                        
                    </ul>
                </div>
                
            </nav>

            <!-- conteudo -->            
            <div>
                {CONTEUDO}             
            </div>  
            <!-- Fim do conteúdo -->

        </div>
    </div>
    

    <!-- Rodape -->
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-6 column">
                </div>
                <div class="col-md-6 column">
                    <h2>
                        Projeto ERP
                    </h2>
                    <p>
                        Equipe: Halyne Ribeiro, Natacha Targino e Jaqueline Fernandes
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>