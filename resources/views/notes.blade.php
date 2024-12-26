<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Profile</title>

    <link rel="stylesheet" href="noteplannerprofile.css">
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
                <button class="add-task">Add Notes</button>
                <div class="status">
                    <a href="kaushik.html" class="env-link">
                    <button class="active-indicator"></button> ACTIVE
                    </a>
                </div>
            </header>
            {{-- //DIFFERENT FOR PAGES// --}}
            <div class="notes-container">
                <button class="add-note-btn">Add Notes</button>
                <div class="notes-scroll">
                  <div class="note">
                    <h3>Note 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae.</p>
                  </div>
                  <div class="note">
                    <h3>Note 2</h3>
                    <p>Curabitur tincidunt lorem at elit faucibus, id euismod sapien tristique. Sed blandit.</p>
                  </div>
                  <div class="note">
                    <h3>Note 3</h3>
                    <p>Ut hendrerit enim sed nunc dictum, ac vehicula turpis eleifend. Pellentesque habitant.</p>
                  </div>
                  <div class="note">
                    <h3>Note 4</h3>
                    <p>Aliquam erat volutpat. Donec facilisis lorem ac ligula feugiat, in scelerisque magna.</p>
                  </div>
                  <div class="note">
                    <h3>Note 5</h3>
                    <p>Mauris nec nunc nec metus suscipit interdum ut quis justo. Proin id felis vel erat.</p>
                  </div>
                </div>
              </div>
        </main>
    </div>
    
</body>
</html>
