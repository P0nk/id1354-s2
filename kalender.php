<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'fragments/head.php'; ?>
        <link href="css/calendar.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="document">
            <div class="banner">
                <?php include 'fragments/banner.php' ?>
            </div>
            <nav>
                <?php include 'fragments/nav.php'; ?>
            </nav>
            <div class="main">
                <h2>Kalender</h2>
                <p>Klicka på en bild i kalendern för att komma till receptet.</p>
                <div class="calendar">
                    <div class="row" id="dayguide">
                        <div>Måndag</div>
                        <div>Tisdag</div>
                        <div>Onsdag</div>
                        <div>Torsdag</div>
                        <div>Fredag</div>
                        <div>Lördag</div>
                        <div>Söndag</div>
                    </div>
                    <div class="row">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                    </div>
                    <div class="row">
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
                        <div>8
                            <a href="pannkakor.php">
                                <img class="calendarimg" src="resources/pancake.jpg" alt="pancakes"/>
                            </a>
                        </div>
                        <div>9</div>
                        <div>10</div>
                        <div>11</div>
                    </div>
                    <div class="row">
                        <div>12</div>
                        <div>13</div>
                        <div>14</div>
                        <div>15</div>
                        <div>16</div>
                        <div>17</div>
                        <div>18</div>
                    </div>
                    <div class="row">
                        <div>19</div>
                        <div>20
                            <a href="kottbullar.php">
                                <img class="calendarimg" src="resources/meatball.jpg" alt="meatballs"/>
                            </a>
                        </div>
                        <div>21</div>
                        <div>22</div>
                        <div>23</div>
                        <div>24</div>
                        <div>25</div>
                    </div>
                    <div class="row">
                        <div>26</div>
                        <div>27</div>
                        <div>28</div>
                        <div>29</div>
                        <div>30</div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>