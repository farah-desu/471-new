<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Profile</title>

    <link rel="stylesheet" href="noteplannerprofile.css">
    {{-- same style sheet as profile --}}
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
                    <a href="kaushik.html" class="env-link">
                    <button class="active-indicator"></button> ACTIVE
                    </a>
                </div>
            </header>
            <section class="planner-section">
                <div class="tasks-section">
                    <h3>Tasks:</h3>
                    <p>491 CONSULTATION</p>
                    <p>350 ADC CIRCUIT</p>
                    <p>341 PIN DIAGRAM</p>
                    <button class="change-btn">Add Task</button>
                </div>
                <div class="assignments-section">
                    <h3>Assignemnts due:</h3>
                    <p>350 in 2 days</p>
                    <p>471 in 1 day</p>
                    <p>soc101 in 3 days</p>
                    <button class="change-btn">Add Assignments</button>
                </div>
                <div class="goals-section">
                    <h3>Goals :</h3>
                    <p>COMPLETE 350 SYLLABUS</p>
                    <button class="change-btn">Add Goals</button>
                </div>
            </section>
        </main>
    </div>
    
</body>
</html>
