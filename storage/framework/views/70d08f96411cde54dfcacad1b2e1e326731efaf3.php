<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Priimo')); ?>

                </a>
            </div>

            <div class="navbar-collapse collapse" id="app-navbar-collapse" aria-expanded="false" style="height: 1px;">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav ">
                    <?php if(!Auth::guest()): ?>
                        <li>
                            <a href="<?php echo e(url('/myProfile')); ?>">
                                My profile
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/submitReview')); ?>">
                                Submit Review
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/findFriends')); ?>">
                                Friends
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/gallery')); ?>">
                                Gallery
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                        <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->user_nickname); ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?php echo e(url('/logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</div>