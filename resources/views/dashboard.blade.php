<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Profile</title>

    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <h2>DASHBOARD</h2>
            <nav>
                <ul>
                    <li>
                        <a href="/dashboard" class="menu-link">
                            <img src="dash-icon.png" alt="Home"> Home
                        </a>
                    </li>
                    <li>
                        <a href="/planner" class="menu-link">
                            <img src="planner-icon.png" alt="Planner"> Planner
                        </a>
                    </li>
                    <li>
                        <a href="/shop" class="menu-link">
                        <img src="shop-icon.png" alt="Shop"> Shop
                        </a>
                    </li>
                    <li>
                        <a href="/notes" class="menu-link">
                        <img src="notes-icon.png" alt="Notes"> Notes
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <main class="content">
            <header class="header">
                <a href="/profile" class="profile-link">
                    <img src="profile-icon.png" alt="Profile Icon">
                    <h1>MOOD PROFILE</h1>
                </a>
                <button class="add-task">Add Task</button>
                <div class="status">
                    <a href="/kaushik" class="env-link">
                    <button class="active-indicator"></button> ACTIVE
                    </a>
                </div>
            </header>
            {{-- //DIFFERENT FOR PAGES// --}}
            <section class="main-content">
                <div class="welcome">
                    <h2>Welcome to Mood!</h2>

                    <div class="calendar-container">
                        <header class="calendar-header">
                            <p class="calendar-current-date"></p>
                            <div class="calendar-navigation">
                                <span id="calendar-prev" 
                                        class="material-symbols-rounded">
                                        ⬅️
                                </span>
                                <span id="calendar-next" 
                                        class="material-symbols-rounded">
                                        ➡️
                                </span>
                            </div>
                        </header>
                        <div class="calendar-body">
                            <ul class="calendar-weekdays">
                                <li>Sun</li>
                                <li>Mon</li>
                                <li>Tue</li>
                                <li>Wed</li>
                                <li>Thu</li>
                                <li>Fri</li>
                                <li>Sat</li>
                            </ul>
                            <ul class="calendar-dates"></ul>
                        </div>
                    <script src="calender.js"></script>
                    <div class="study-hours-legend">
                        <div class="legend-container">
                            <div class="legend-item">
                                <div class="color-box" style="background-color: rgb(210, 210, 240);"></div>
                                <span>3 hrs</span>
                            </div>
                            <div class="legend-item">
                                <div class="color-box" style="background-color: rgb(255, 210, 230);"></div>
                                <span>5 hrs</span>
                            </div>
                            <div class="legend-item">
                                <div class="color-box" style="background-color: rgb(255, 180, 190);"></div>
                                <span>10 hrs</span>
                            </div>
                            <div class="legend-item">
                                <div class="color-box" style="background-color: rgb(255, 120, 150);"></div>
                                <span>12 hrs</span>
                            </div>
                            <div class="legend-item">
                                <div class="color-box" style="background-color: rgb(255, 80, 100);"></div>
                                <span>14 hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                <div class="todo">
                    <h3>Essential To-Do</h3>
                    <p>+ Complete Figma Assignment</p>
                    <button>To-Do</button>
                    <button>Save</button>
                </div>
                <div class="schedule">
                    <h3>Scheduled for Today:</h3>
                    <p>Study Goals and Routine</p>
                </div>
            </section>
        </main>
    </div>
    
</body>
</html>
