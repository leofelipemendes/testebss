<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
             <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo utf8_encode('Transa��es') ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                
                <ul class="treeview-menu">
                    <li><a href="#"><?php echo utf8_encode('Cr�dito') ?></a></li>
                    <li><a href="#"><?php echo utf8_encode('D�bito') ?></a></li>
                    <li><a href="#"><?php echo utf8_encode('Transfer�ncia') ?></a></li>
                    <li><a href="#"><?php echo utf8_encode('Balan�o') ?></a></li>
                    <li><a href="#"><?php echo utf8_encode('Ver Transa��es') ?></a></li>
                </ul>
                
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo utf8_encode('Contas') ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                
                <ul class="treeview-menu">
                    <li><a href="#"><?php echo utf8_encode('Nova Conta') ?></a></li>
                    <li><a href="#"><?php echo utf8_encode('Balan�o das Contas') ?></a></li>
                </ul>
                
            </li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span><?php echo utf8_encode('Meios de Pagamento') ?></span></a></li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span><?php echo utf8_encode('Categorias de Despesas') ?></span></a></li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span><?php echo utf8_encode('Categorias de Receitas') ?></span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
           
           
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
