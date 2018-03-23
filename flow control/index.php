<?php require_once '../header.php'; ?>
    <body>
        
       <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-11 order-lg-1 my-auto showcase-text">
            <a href="#">
                <h2>
                    Switch
                </h2>
            </a>
            <p class="lead mb-0">
                
                <?php
                
                // it tests against a single value
                
                $variable = 45;
                
                switch ($variable) {
                    case 5:
                        case 10:
                            case 14:
                                echo 'Too cold.';
                        break;
                    case 15:
                        case 20:
                            case 22:
                                echo 'Moderate.';
                        break;
                    case 30:
                        case 35:
                            case 40:
                                echo 'Too hot.';
                        break;

                    default:
                        echo 'If all cases fail, this will be the final value: it is not good out.';
                        break;
                }
                
                ?>
            </p>
            
            <h2>Code Switch</h2>
            
            <pre>
                <code>
                    // it tests against a single value
                
                $variable = 45;
                
                switch ($variable) {
                    case 5:
                        case 10:
                            case 14:
                                echo 'Too cold.';
                        break;
                    case 15:
                        case 20:
                            case 22:
                                echo 'Moderate.';
                        break;
                    case 30:
                        case 35:
                            case 40:
                                echo 'Too hot.';
                        break;

                    default:
                        echo 'If all cases fail, this will be the final value: it is not good out.';
                        break;
                }
</code>
            </pre>
            
          
            <a href="#">
                <h2>
                    Flow Control
                </h2>
            </a>
            <p class="lead mb-0">
                
                <a href="ternary.php">Ternary</a>
                
            </p>
            <p class="lead mb-0">
                
                <a href="forloop.php">For Loop</a>
                
            </p>
          </div>
        </div>
        
    </section>

    </body>
</html>
