				<!-- container-navigation -->
				<div id="container-navigation">
					<div id="container-button-launch" title="Lan�amentos">
						<a href="launches.php">
							<img id="img-button-launch" src="resources/images/bg_button_launch.png" border="0" />
						</a>
					</div>
					<?php 
						// se o usu�rio logado for admin (role_admin=1/role_admin=0,usu�rio comum)
						// ser�o mostradas todas as op��es de navega��o do sistema
						if (isset($_SESSION['loggedUser']) && $_SESSION['loggedUser']->getROLE_ADMIN () == "1") {
					?>
							<div id="container-button-revenue-type" title="Tipos de Receita">
								<a href="revenueTypes.php">
									<img id="img-button-revenue-type" src="resources/images/bg_button_revenue_type.png" border="0" />
								</a>
							</div>					
							<div id="container-button-user" title="Usu�rios">
								<a href="users.php">
									<img id="img-button-user" src="resources/images/bg_button_user.png" border="0" />
								</a>
							</div>					
							<div id="container-button-expense-type" title="Tipos de Despesa">
								<a href="expenseTypes.php">
									<img id="img-button-expense-type" src="resources/images/bg_button_expense_type.png" border="0" />
								</a>
							</div>
					<?php 
						} 
					?>
				</div>
	