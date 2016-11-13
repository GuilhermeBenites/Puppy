<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Puppy</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Puppy</span></a>
                </div>
                <div class="clearfix"></div>
                <!-- menu profile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="/images/user.png" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Bem-Vindo,</span>
                        <h2>Guilherme</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br />
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Loja</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-usd"></i> Caixa <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Nova Venda</a></li>
                                    <li><a href="#">Abrir Caixa</a></li>
                                    <li><a href="#">Fechar Caixa</a></li>
                                    <li><a href="#">Consultar Preço</a></li>
                                    <li><a href="#">Histórico de Vendas</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-truck"></i> Estoque <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Estoque Atual</a></li>
                                    <li><a href="#">Histórico de Movimentações</a></li>
                                    <li><a href="#">Entrada de Mercadoria</a></li>
                                    <li><a href="#">Baixa de Mercadoria</a></li>
                                    <li><a href="#">Informar Estoque</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> Granel <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Estoque Atual</a></li>
                                    <li><a href="#">Abrir Saco</a></li>
                                    <li><a href="#">Novo Granel</a></li>
                                    <li><a href="#">Informar Estoque</a></li>
                                </ul>
                            </li>
                    </div>
                    <div class="menu_section">
                        <h3>Cadastros</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-users"></i> Fornecedores <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Fornecedores</a></li>
                                    <li><a href="#">Novo Fornecedor</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-archive"></i> Produtos <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Produtos</a></li>
                                    <li><a href="#">Novo Produto</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-tags"></i> Categorias <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url('categorias')}}">Categorias</a></li>
                                    <li><a href="{{url('categorias/novo')}}">Nova Categoria</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Relatorios</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-bug"></i> Vendas <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">?</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-windows"></i> Estoque <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">?</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="/images/user.png" alt="">Guilherme
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="#"> Perfil</a></li>
                                <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Puppy 1.0
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/js/bootstrap.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="/js/custom.min.js"></script>
</body>

</html>