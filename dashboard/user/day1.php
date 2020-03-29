<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - 30 Days Of Code</title>
    <link href="../dist/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">30DaysOfCode.xyz</a><button
            class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
            class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">User</div>
                        <div class="avatar">
                        
                        </div> 
                        <a class="nav-link" href="index.php"
                            ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="https://30daysofcode.xyz/dashboard/"
                            >
                            <div class="sb-nav-link-icon"><i class="fas fa-plane"></i></div>
                        Leaderboard
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-paper-plane"></i></div>
                        </a>
                        <a class="nav-link" href="https://30daysofcode.xyz/whatsapp">
                            <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                        Support Group
                        </a>
                        <a class="nav-link" href=" https://twitter.com/intent/tweet?url=https%3A%2F%2F30daysofcodes.xyz&via=codon&text=Hello%2C%20I%20just%20finished%20my%20task%20for%20....&hashtags=30DaysOfCode%2C%20ECX">
                            <div class="sb-nav-link-icon"><i class="fas fa-share"></i></div>
                            Tweet
                        </a>
                        <a class="nav-link" href="submit.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-submit"></i></div>
                            Submit
                        </a>
                        <div class="sb-sidenav-menu-heading"></div>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            All Tasks
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link active" href="day0.html">Day 0</a>
                                <a class="nav-link active" href="day1.html">Day 1</a>
                                <a class="nav-link active" href="day2.html">Day 2</a>
                                <a class="nav-link active" href="day3.html">Day 3</a>
                                <a class="nav-link active" href="day4.html">Day 4</a>
                                <a class="nav-link collapsed" href="day5.html">Day 5</a>
                                <a class="nav-link collapsed" href="#">Day 6</a>
                                <a class="nav-link collapsed" href="#">Day 7</a>
                                <a class="nav-link collapsed" href="#">Day 8</a>
                                <a class="nav-link collapsed" href="#">Day 9</a>
                                <a class="nav-link collapsed" href="#">Day 10</a>
                                <a class="nav-link collapsed" href="#">Day 11</a>
                                <a class="nav-link collapsed" href="#">Day 12</a>
                                <a class="nav-link collapsed" href="#">Day 13</a>
                                <a class="nav-link collapsed" href="#">Day 14</a>
                                <a class="nav-link collapsed" href="#">Day 15</a>
                                <a class="nav-link collapsed" href="#">Day 16</a>
                                <a class="nav-link collapsed" href="#">Day 17</a>
                                <a class="nav-link collapsed" href="#">Day 18</a>
                                <a class="nav-link collapsed" href="#">Day 19</a>
                                <a class="nav-link collapsed" href="#">Day 20</a>
                                <a class="nav-link collapsed" href="#">Day 21</a>
                                <a class="nav-link collapsed" href="#">Day 22</a>
                                <a class="nav-link collapsed" href="#">Day 23</a>
                                <a class="nav-link collapsed" href="#">Day 24</a>
                                <a class="nav-link collapsed" href="#">Day 25</a>
                                <a class="nav-link collapsed" href="#">Day 26</a>
                                <a class="nav-link collapsed" href="#">Day 27</a>
                                <a class="nav-link collapsed" href="#">Day 28</a>
                                <a class="nav-link collapsed" href="#">Day 29</a>
                            </nav>
                        </div> 
                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as:</div>
                           <?php echo $_SESSION['login_user'];?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>

                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>Day 1 Task</div>
                        <div class="card-body">
                            <div class="alert alert-primary" role="alert">
                                <a
                                    href="https://geektutor.github.io/Leaderboard/ecx/Day%201%20-%20FrontEnd%20-%2030DaysOfCode.pdf">Front
                                    End - Day 1</a>
                            </div>
                            <div class="alert alert-primary" role="alert">
                                <a
                                    href="https://geektutor.github.io/Leaderboard/ecx/Day%201%20-%20Backend%20-%2030DaysOfCode.pdf">Back
                                    End - Day 1</a>
                            </div>
                            <div class="alert alert-primary" role="alert">
                                <a
                                    href="https://geektutor.github.io/Leaderboard/ecx/Day%201%20-%20UIUX%20-%2030DaysOfCode.pdf">UI/UX
                                    - Day 1</a>
                            </div>
                            <div class="alert alert-primary" role="alert">
                                <a
                                    href="https://geektutor.github.io/Leaderboard/ecx/Day%201%20-%20Mobile%20-%2030DaysOfCode.pdf">Mobile
                                    Development - Day 1</a>
                            </div>
                            <div class="alert alert-primary" role="alert">
                                <a
                                    href="https://geektutor.github.io/Leaderboard/ecx/Day%201%20-%20Python%20-%2030DaysOfCode.pdf">Python
                                    - Day 1</a>
                            </div>
                            <div class="alert alert-primary" role="alert">
                                <a
                                    href="https://geektutor.github.io/Leaderboard/ecx/Day%201%20-%20Design%20-%2030DaysOfCode.pdf">Engineering
                                    Design - Day 1</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 30DayOfCode 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="../dist/js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/datatables-demo.js"></script>
</body>
</html>