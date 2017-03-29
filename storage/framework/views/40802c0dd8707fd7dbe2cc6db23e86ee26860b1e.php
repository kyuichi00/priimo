

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(config('app.name', 'Priimo')); ?>

            </a>
        </div>
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php if(Auth::guest()): ?>
                <li><a href="<?php echo e(url('/login')); ?>">My profile</a></li>
                <li><a href="<?php echo e(url('/submitReview')); ?>">Submit Review</a></li>
                <li><a href="#">Find Friends</a></li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo e(url('/myProfile')); ?>">
                            My profile
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/submitReview')); ?>">
                            Submit Review
                        </a></li>
                    <li>
                        <a href="#">
                            Friends
                        </a>
                    
                        
                            
                        
                    
                        
                            
                        
                    
                <?php endif; ?>

            </ul>
            <ul class="nav navbar-nav navbar-right">
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
                                <a href="<?php echo e(url('/myProfile')); ?>">
                                    My profile
                                </a>
                                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
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
        </div><!--/.nav-collapse -->
    </div>

</nav>

    
    

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
