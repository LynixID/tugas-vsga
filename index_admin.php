<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }

        header {
            background: #4CAF50;
            color: white;
            padding: 1rem;
            text-align: center;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            background: #333;
            color: white;
            padding: 1rem;
            width: 250px;
            box-shadow: 10px 0 20px rgba(0, 0, 0, 0.1);
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 1rem 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 0.5rem 0;
            transition: background 0.3s;
        }

        .sidebar ul li a:hover {
            background: #575757;
        }

        main {
            flex: 1;
            padding: 2rem;
            background: #f4f4f4;
            overflow: auto;
        }

        .book-collection {
            margin: 2rem 0;
            color: black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 0.75rem;
            text-align: center;
        }

        th {
            background: #4CAF50;
            color: black;
        }

        td {
            color: black;
        }

        img {
            max-width: 100px;
            height: auto;
        }

        .pagination {
            text-align: center;
            margin: 2rem 0;
        }

        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            color: #333;
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }

        .pagination a:hover {
            background: #ddd;
        }

        .pagination a.active {
            background: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Manage Buku</a></li>
            </ul>
        </nav>
    </div>
    <main>
        <section class="book-collection">
            <h2>Koleksi Buku</h2>
            <table>
                <thead>
                    <tr>
                        <th>Cover</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody id="book-list">
                    <tr>
                        <td><img src="img/lautbercerita.jpg" alt="Laut Bercerita"></td>
                        <td>Laut Bercerita</td>
                        <td>Leila S. Chudori</td>
                        <td>Top 1</td>
                    </tr>
                    <tr>
                        <td><img src="img/bumimanusia.jpg" alt="Bumi Manusia"></td>
                        <td>Bumi Manusia</td>
                        <td>Pramoedya Ananta Toer</td>
                        <td>Top 2</td>
                    </tr>
                    <tr>
                        <td><img src="img/saman.jpg" alt="Saman"></td>
                        <td>Saman</td>
                        <td>Ayu Utami</td>
                        <td>Top 3</td>
                    </tr>
                    <tr>
                        <td><img src="img/laskarpelangi.jpg" alt="Laskar Pelangi"></td>
                        <td>Laskar Pelangi</td>
                        <td>Andrea Hirata</td>
                        <td>Top 4</td>
                    </tr>
                    <tr>
                        <td><img src="img/perjalananmenujupulang.jpeg" alt="Perjalanan Menuju Pulang"></td>
                        <td>Perjalanan Menuju Pulang</td>
                        <td>Lala Bohang, Lala Nebong</td>
                        <td>Top 5</td>
                    </tr>
                </tbody>
            </table>
            <div class="pagination">
                <a href="#" class="prev">&laquo; Prev</a>
                <a href="#" class="page active">1</a>
                <a href="#" class="page">2</a>
                <a href="#" class="next">Next &raquo;</a>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');
            const pages = document.querySelectorAll('.page');
            const rows = document.querySelectorAll('#book-list tr');
            const rowsPerPage = 3;

            let currentPage = 1;
            showPage(currentPage);

            prevBtn.addEventListener('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            nextBtn.addEventListener('click', function() {
                if (currentPage < Math.ceil(rows.length / rowsPerPage)) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            pages.forEach(function(page, index) {
                page.addEventListener('click', function() {
                    currentPage = index + 1;
                    showPage(currentPage);
                });
            });

            function showPage(pageNum) {
                pages.forEach(function(page) {
                    page.classList.remove('active');
                });

                pages[pageNum - 1].classList.add('active');

                rows.forEach(function(row) {
                    row.style.display = 'none';
                });

                let start = (pageNum - 1) * rowsPerPage;
                let end = start + rowsPerPage;
                for (let i = start; i < end && i < rows.length; i++) {
                    rows[i].style.display = 'table-row';
                }
            }
        });
    </script>
</body>

</html>