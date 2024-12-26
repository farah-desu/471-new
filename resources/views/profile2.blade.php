<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Profile</title>
    <link rel="stylesheet" href="profile.css">
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
            <section class="profile-section">
                <div class="uname">
                    <h3>Username:</h3>
                    <p>farah._.desu</p>
                </div>
                <div class="profile-picture">
                    <h3>Profile Picture:</h3>
                    <img src="profile-icon.png" alt="Profile Picture" class="profile-img">
                    <button class="change-btn">Change</button>
                </div>
                <div class="academic-info">
                    <h3>Academic Credentials:</h3>
                    <p>Bachelors of Science and Computer Engineering</p>
                    <button class="change-btn">Update</button>
                </div>
                <div class="email-info">
                    <h3>Email Address:</h3>
                    <p>farah.bhuyan2001@gmail.com</p>
                    <button class="change-btn">Change Address</button>
                </div>
            </section>
            
        </main>
    </div>
</body>
</html>
