<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Creator</title>
	<link rel="shortcut icon" href="../assets/images/inspiration.png" type="image/x-icon">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.card {
    background-color: #234567;
    border-radius: 10px;
    color: white;
    text-align: center;
    padding: 20px;
    width: 300px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.card:hover{
    background-color: #f1fef4;
    color: #234567;
}

.icon img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 10px;
}

h2 {
    font-size: 1.5em;
    margin: 10px 0;
}

p {
    font-size: 1em;
    margin: 10px 0 20px;
}
.card .btn a{
    text-decoration:none;
    color: #fff;
}

.btn {
    background-color: #32cd32;
    border: none;
    color: white;
    padding: 10px 20px;
    font-size: 1em;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn.create {
    background-color: #00cc66;
}

.btn.ai {
    background-color: #00bfff;
}

.btn:hover {
    background-color: #234567;
}

@media (max-width: 600px) {
    .card {
        width: 100%;
    }

    .container {
        padding: 10px;
    }
}

</style>
<body>
    <div class="container">
        <div class="card">
            <div class="icon">
                <img src="random.jpeg" alt="random Icon">
            </div>
            <h2>Random questions</h2>
            <p>Test your knowledge with this random questions</p>
            <button class="btn create"><a href="main.php">Proceed</a></button>
        </div>
        <div class="card">
            <div class="icon">
                <img src="two.jpg" alt="software eng">
            </div>
            <h2>Software enginnering</h2>
            <p>Take quizzes on sofware engineering</p>
            <button class="btn ai"><small>[coming soon]</small> </button>
        </div>
        <div class="card">
            <div class="icon">
                <img src="ai.jpeg" alt="AI">
            </div>
            <h2>A.I.</h2>
            <p>Test your AI knownledge</p>
            <button class="btn ai"><small>[coming soon]</small> </button>
        </div>
        <div class="card">
            <div class="icon">
                <img src="hack.avif" alt="hack">
            </div>
            <h2>Ethical Hacking</h2>
            <p>For the big boys...</p>
            <button class="btn ai"><small>[coming soon]</small></button>
        </div>
    </div>
</body>
</html>
