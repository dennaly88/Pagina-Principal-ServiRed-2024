<!--------------------------------------------------------------------------------------------------------
|--------------------------------------------------------------------------------------------------------
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ   
| TELEFONO :0426-249-15-40
| CORREO : DENNALY88@GMAIL.COM
|------------------------------------------------------------------------------------------------------------
|  
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISION DE SERVIDORES Y REDES
|  VENEZOLANA DE TELEVISION C.A
|  CANAL 8
|  PROYECTO SOCIOTECNOLOGICO 
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA 
| 
| 
--------------------------------------------------------------------------------------------------------->

<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="fa fa-bars"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            <?php
									  session_start();
									  $usuario=$_SESSION['usuario'] ;
									  $perfil=$_SESSION['perfil'] ;
                            ?> 
							<div class="logo-nav">
								<a href="index.html">

								</a>
							</div>
							<div class="clear-toggle"></div>
							<div id="main-menu" class="collapse scroll navbar-right">
								<ul class="nav">
								<img src="images/logo-VTV.png" alt="Company logo" />
								<li></li>
									   <li class="active"> <a href="#home"><?php echo  "    " . $_SESSION['usuario']; ?></a> </li>
										<li> <a href="index.php">INICIO</a> </li>
										<li> <a href="redes.php">REDES</a> </li>
										<li> <a href="#">SERVIDORES</a> </li>
										<li> <a href="#">INVENTARIOS</a> </li>
										<li> <a href="#">REPORTES</a> </li>
										<li> <a href="#">ESTADISTICAS</a></li>
										<li> <a href="../administrador/principal/index.php">ADMINISTRAR</a> </li>
										<li> <a href="../login/seguridad/destruir-sesion.php">SALIR</a> </li>
										<li>  <a href="#home"><?php echo  "    " . $_SESSION['perfil']; ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
		</header>
<!--------------------------------------------------------------------------------------------------------
|--------------------------------------------------------------------------------------------------------
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ   
| TELEFONO :0426-249-15-40
| CORREO : DENNALY88@GMAIL.COM
|------------------------------------------------------------------------------------------------------------
|  
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISION DE SERVIDORES Y REDES
|  VENEZOLANA DE TELEVISION C.A
|  CANAL 8
|  PROYECTO SOCIOTECNOLOGICO 
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA 
| 
| 
--------------------------------------------------------------------------------------------------------->
		    

