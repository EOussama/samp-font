<?php
    /**
     * @name:       Samp Front
     * @version:    0.2.0
     * @author:     EOussama (eoussama.github.io)
     * @license     MIT
     * @source:     github.com/EOussama/samp-front
     */

    require_once "config/config.php";
    require_once "utils/icons.php";

    $config = unserialize(CONFIG);

    include "views/partials/_header.php";
?>
        <!-- The header. -->
        <header class="ui vertical center aligned segment">
            <div class="ui container">

                <!-- Community name -->
                <h1 class="ui header"><?php echo $config['name']; ?></h1>

                <!-- Community slogan. -->
                <h4 class="ui grey header"><?php echo $config['slogan']; ?></h4>

                <!-- Scroll down button. -->
                <p class="icon-wrapper">
                    <i id="scroll-down-btn" class="grey huge angle down icon"></i>
                </p>
            </div>
        </header>

        <!-- The main content. -->
        <main class="ui container">
            <div class="ui stackable grid">
                <div class="row">

                    <!-- Live stats section. -->
                    <section id="live-stats" class="eleven wide column">
                        <div class="ui segment">
                            <h3>Live stats</h3>
                            
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro nobis modi omnis. Sapiente in temporibus inventore sit ducimus molestiae nobis labore eligendi libero, cupiditate ex! Impedit voluptatum quisquam ad molestiae.</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, praesentium repudiandae porro doloremque, sint ab, rerum voluptatum neque velit eveniet alias asperiores. Reiciendis qui perferendis voluptate quaerat, mollitia commodi numquam.</p>
                        </div>
                    </section>

                    <!-- Discord section. -->
                    <section class="five wide column">
                        <div class="ui segment discord-section">
                            <iframe src="https://discordapp.com/widget?id=<?php echo $config['discord']['id']; ?>&theme=<?php echo $config['discord']['theme']; ?>" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
                        </div>
                    </section>
                </div>
            </div>
        </main>

        <!-- Scroll to top button. -->
        <div id="scroll-top">
            <i class="huge angle up icon"></i>
        </div>
        
<?php include "views/partials/_footer.php"; ?>