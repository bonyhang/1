/* Reset default styles */
body, h1, h2, p, ul {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background: #f8f8f8;
    color: #333;
}

.container {
    width: 90%;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

/* 🔹 Closeable Anchor Ad */
.anchor-ad {
    position: fixed;
    top: 0;
    width: 100%;
    background: #fff;
    text-align: center;
    padding: 10px 0;
    z-index: 1000;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.close-ad {
    position: absolute;
    top: 5px;
    right: 10px;
    background: red;
    color: white;
    border: none;
    cursor: pointer;
    padding: 5px 10px;
    font-size: 16px;
}

/* 🔹 Blog Post */
.blog-post {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.article-image {
    width: 100%;
    border-radius: 5px;
}

.meta {
    font-size: 0.9em;
    color: #777;
}

/* 🔹 Auto-Loading Content */
#auto-load-content {
    margin-top: 30px;
}

/* 🔹 Responsive Design */
@media (max-width: 768px) {
    nav ul {
        text-align: center;
        padding: 10px 0;
    }

    nav ul li {
        display: block;
        margin: 10px 0;
    }

    .anchor-ad img,
    .fixed-ad img,
    .inline-ad img,
    .video-ad img,
    .native-ad img {
        width: 100%;
    }
}
