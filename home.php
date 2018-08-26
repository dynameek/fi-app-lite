<?php
    require_once('./web.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>FieldInsights</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            Asset::loadStyles(['general', 'forms', 'home-specific', 'colors', 'links', 'resp']);
            Asset::loadScripts(['system.js','fi-hobby.js'])
        ?>
    </head>
    <body>
        <div class="page-wrap">
            <header>
                <div>
                    <div class="site-icon">
                        <?php Asset::loadImage('fi-logo.png');?>
                    </div>
                    <button id="logout">log Out</button>
                </div>
            </header>
           <section class="left-sec">
                <div>
                    <div class="card">
                        <div id="form-message"></div>
                        <form name="add_hobby" action="" method="post">
                            <?= Security::protectForm() ?>
                            <input type="text" name="hobby_name" id="hobby" placeholder="Enter a Hobby" class="curved-border">
                            <input type="button" name="hobby-sub" id="add-hobby-btn" value="Add Hobby" class="right short-btn bg-cool-blue curved-border">
                        </form>
                    </div>
                    <div class=" card hobby-list-wrap">
                        <h3>Your Hobbies: <span id="clear-hobbies">Clear Hobbies</span></h3>
                        <div id="hobby-list">
                            
                        </div>
                    </div>
                </div>
           </section>
           <section class="right-sec">
                <div class="outer-about-wrapper">
                    <div class="about-wrapper">
                        <div>
                            <div class="ball-point"></div>
                            <article>
                                <h3>APP INFO</h3>
                                <p>
                                    This is a hobby aggregation application which lets you
                                    keep a stock of your hobbies.
                                    This version allows you add hobbies and sends them
                                    to you via SMS and Email.
                                </p>
                            </article>
                        </div>
                        <div>
                            <div class="ball-point"></div>
                            <article>
                                <h3>TECHNOLOGIES</h3>
                                <p>
                                    To bring this application to you, I used the following
                                    technologies:<br>
                                    <ol>
                                        <li>HTML & CSS</li>
                                        <li>JavaScript</li>
                                        <li>AJAX</li>
                                        <li>PHP</li>
                                        <li>Twilio SMS API</li>
                                        <li>SendGrid email API</li>
                                        <li>JS localStorage {Client-side data storage}</li>
                                    </ol>
                                </p>
                            </article>
                        </div>
                        <div>
                            <div class="ball-point"></div>
                            <article>
                                <h3>CONSTRAINTS</h3>
                                <p>
                                    In the course of development, I encountered the following issues:
                                    <ol>
                                        <li>
                                            I chose to utilize JavaScript's localStorage as a storage
                                            engine, as Heroku provides limited database support.
                                        </li>
                                        <li>
                                            Twilio is constrained
                                            to sending SMS to verified users.
                                        </li>
                                        <li>
                                            I had problems with Amazon's SES account creation and validation
                                            leading me to opt for SendGrid's email API.
                                        </li>
                                    </ol>
                                </p>
                            </article>
                        </div>
                        <div>
                            <div class="ball-point"></div>
                            <article>
                                <h3>DEVELOPER</h3>
                                <p>
                                    Nathan is a self-taught driven, self-motivated and creative
                                    full stack web developer who loves to solve problems and
                                    drive positive growth.
                                </p>
                                <p>
                                    He's also had the priviledge of being
                                    the president of the Nigeria Association of Computer Science Students,
                                    LAUTECH chapter and the chief publisher of an erstwhile campus
                                    Magazine - MeekUrban.
                                </p>
                                <p>
                                    I'd be pleased to commence ASAP.
                                </p>
                            </article>
                        </div>
                        <div>
                            <div class="ball-point"></div>
                            <article>
                                <h3>REQUEST</h3>
                                <p>
                                    Accomodation and a fair salary
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
           </section>
        </div>
    </body>
</html>