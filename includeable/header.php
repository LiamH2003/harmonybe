<div class="headerDiv" id="headerDiv">
            <div class="logoDiv"></div>
            <ul class="navList">
                <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                    <li class="item1"><a href="../homepage/index.php" class="navItem1">Home</a></li>
                    <li class="dropdown item2">
                        <a href="javascript:void(0)" class="navItem2" onclick="toggleDropdown()">Tools <span class="arrow right"></span></a>
                        <div class="dropdown-content" id="dropdownMenu">
                            <a href="../1.intake/index.php">1. Intakegesprek</a>
                            <a href="../2.traject/index.php">2. Traject</a>
                            <a href="../3.cursusplan/index.php">3. Cursusplan</a>
                            <a href="../4.examens/index.php">4. Examens</a>
                            <a href="../5.integratie/index.php">5. Integratieplan</a>
                            <a href="../6.evaluatie/index.php">6. Evaluatie</a>
                            <a href="../7.attest/index.php">7. Attest</a>
                            <a href="../inbox/index.php">Inbox</a>
                            <a href="../cursussen/index.php">Cursussen</a>
                        </div>
                    </li>
                    <li class="item4"><a href="../about/index.php" class="navItem4">About</a></li>
                    <li class="item5"><a href="../account/index.php" class="navItem5 lastItem">Account</a></li>
                <?php else: ?>
                    <li class="item1"><a href="../homepage/index.php" class="navItem1">Home</a></li>
                    <li class="item4"><a href="../about/index.php" class="navItem2">About</a></li>
                    <li class="item2"><a href="../login/index.php" class="navItem3 lastItem">Log In</a></li>
                <?php endif; ?>
            </ul>
            <div class="hamburgerDiv" onclick="hamburgerMenu()"></div>
        </div>
        <div class="mobileNav">
            <ul class="mobileNavList">
                <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                    <li><a href="../homepage/index.php" class="mobileNavItem1">Home</a></li>
                    <li class="dropdown"><a href="javascript:void(0)" class="mobileNavItem2">Tools</a>
                        <div class="dropdown-content">
                            <a href="../inbox/index.php">Inbox</a>
                            <a href="../cursussen/index.php">Cursussen</a>
                            <!-- Add more items as needed -->
                        </div>
                    </li>
                    <li><a href="../about/index.php" class="mobileNavItem4">About</a></li>
                    <li><a href="../account/index.php" class="mobileNavItem5">Account</a></li>
                <?php else: ?>
                    <li><a href="../homepage/index.php" class="mobileNavItem1">Home</a></li>
                    <li><a href="../about/index.php" class="mobileNavItem2">About</a></li>
                    <li><a href="../login/index.php" class="mobileNavItem3">Log In</a></li>
                <?php endif; ?>
            </ul>
        </div>