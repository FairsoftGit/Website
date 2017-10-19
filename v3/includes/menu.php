<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
            <a class="navbar-brand" href="#">
				<img id="navBarImg" src="../../pages/img/logo-white.png" alt="Fairsoft">
			</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li<?php if ($thisPage=='aboutUs') echo ' class="selected"'; ?>>
                	<a href="index.php">Wie wij zijn</a>
                </li>
                <li<?php if ($thisPage=='howItWorks') echo ' class="selected"'; ?>>
                	<a href="howItWorks.php">Hoe het werkt</a>
                </li>
                <li class="dropdown<?php if ($parent=='producten') echo ' selected'; ?>">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Onze producten
                    	<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li<?php if ($thisPage=='fairVest') echo ' class="selected"'; ?>>
                       		<a href="fairVest.php">FairVest</a>
                       		</li>
                        <li<?php if ($thisPage=='fairBox') echo ' class="selected"'; ?>>
                        	<a href="fairBox.php">FairBox</a>
                        </li>
                        <li<?php if ($thisPage=='fairGoggles') echo ' class="selected"'; ?>>
                       	 <a href="fairGoggles.php">FairGoggles</a>
                        </li>
                        <li<?php if ($thisPage=='fairApp') echo ' class="selected"'; ?>>
                       		<a href="fairApp.php" id="fairApp">FairApp</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown<?php if ($parent=='diensten') echo ' selected'; ?>">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Onze diensten<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li<?php if ($thisPage=='fairData') echo ' class="selected"'; ?>>
                        	<a href="fairData.php">FairData</a>
                        </li>
                        <li<?php if ($thisPage=='fairRent') echo ' class="selected"'; ?>>
                        	<a href="fairRent.php">FairRent</a>
                        </li>
                        <li<?php if ($thisPage=='fairPayPlan') echo ' class="selected"'; ?>>
                        	<a href="fairPayPlan.php">FairPayPlan</a>
                        </li>
                    </ul>
                </li>
                <li<?php if ($thisPage=='techSupport') echo ' class="selected"'; ?>>
                	<a href="techSupport.php">Tech Support</a>
                </li>
                <li<?php if ($thisPage=='contact') echo ' class="selected"'; ?>>
                	<a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>