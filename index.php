<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breaking News: George Clooney Found in a Jackaroo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Clooney Town</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">News</a></li>
                    <li><a href="ShadowsOfTheSpotlight.html">Novel</a></li>
                    <li><a href="sports.html">Sports</a></li>
                    <li><a href="entertainment.html">Entertainment</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="showcase">
        <div class="container">
            <h1>Breaking News: George Clooney Found in a Jackaroo</h1>
        </div>
    </section>

    <div class="container">
        <section id="main-content">
            <img src="Media.jpg" alt="George Clooney in a Jackaroo">
            <div class="text">
                <h2>Breaking News: George Clooney Found in a Jackaroo</h2>
                <p><em>by Jane Doe, June 24, 2024</em></p>
                <p>
                    In a surprising turn of events, Hollywood actor George Clooney was discovered in an unexpected location – inside a vintage Jackaroo. The incident occurred in downtown Los Angeles, where onlookers were shocked to see the celebrity casually sitting in the backseat of the classic vehicle.
                </p>
                <p>
                    Clooney, known for his roles in movies such as "Ocean's Eleven" and "Gravity," appeared to be enjoying a moment of nostalgia. When asked about his unusual choice of transportation, Clooney smiled and explained, "I've always had a soft spot for classic cars, and the Jackaroo is a timeless beauty. It reminds me of simpler times."
                </p>
                <p>
                    The Jackaroo, an off-road vehicle produced in the mid-20th century, is a rare sight on the roads today. Clooney's appearance in the car quickly drew a crowd, with fans and passersby eager to catch a glimpse of the star and his stylish ride.
                </p>
                <p>
                    Despite the unexpected nature of the event, Clooney took the attention in stride, chatting with fans and posing for pictures. "It's always great to connect with people," he said. "And if it takes an old car to bring us together, I'm all for it."
                </p>
                <p>
                    This latest sighting adds to Clooney's reputation as a down-to-earth celebrity who enjoys life's simple pleasures. As for the Jackaroo, it seems this classic vehicle has found a new fan in one of Hollywood's biggest stars.
                </p>
            </div>
        </section>

        <section id="comments">
            <h3>Comments</h3>
            <form action="comments.php" method="post">
                <input type="text" name="name" placeholder="Your name" required>
                <textarea name="comment" placeholder="Your comment" required></textarea>
                <input type="submit" value="Post Comment">
            </form>

            <?php
            // Include the comments file
            include 'comments.php';
            ?>
        </section>
        
    </div>

    <footer>
        <p>Clooney Town &copy; 2024</p>
    </footer>
</body>
</html>
