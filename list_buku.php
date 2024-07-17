<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Display</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-brand"></a>
            <ul class="navbar-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Books</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?php
        include 'connection.php';

        $sql = "SELECT * FROM buku";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="w-[240px] h-[320px] border flex flex-col rounded-md overflow-hidden hover:scale-[1.03] cursor-pointer duration-200" data-id="' . $row['buku_id'] . '">';
                echo '<img src="asset/img/' . htmlspecialchars($row['gambar']) . '" alt="" class="w-full h-[250px] object-cover mb-4">';
                echo '<h1 class="text-lg font-bold pl-3">' . htmlspecialchars($row['judul']) . '</h1>';
                echo '<h2 class="text-sm pl-3">' . htmlspecialchars($row['penulis']) . '</h2>';
                echo '</div>';
            }

            mysqli_close($conn);
        }
        ?>
    </div>
    <script>
        document.querySelectorAll('.container div').forEach(item => {
            item.addEventListener('click', function() {
                let bookId = this.getAttribute('data-id');
                fetch('add_loan.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'buku_id=' + encodeURIComponent(bookId)
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                    });
            });
        });
    </script>
</body>

</html>