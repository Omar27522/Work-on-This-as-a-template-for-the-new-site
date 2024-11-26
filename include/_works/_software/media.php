<style>
/* Enhanced styling for the media page */
.blurb {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    line-height: 1.6;
}

.blurb h1#title {
    font-size: 2.5rem;
    color: #2c3e50;
    margin-bottom: 1rem;
    border-bottom: 3px solid #3498db;
    padding-bottom: 0.5rem;
}

.blurb h2 {
    font-size: 1.8rem;
    color: #34495e;
    margin: 1.5rem 0;
}

.blurb h3 {
    font-size: 1.4rem;
    color: #2980b9;
    margin: 1.2rem 0;
}

.selection {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 8px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    padding: 2rem;
}

.media-types, .media-formats, .media-importance {
    margin: 2rem 0;
    padding: 1.5rem;
    background: #f8f9fa;
    border-left: 4px solid #3498db;
    border-radius: 0 8px 8px 0;
}

.sub_sub_title {
    list-style-type: none;
    padding-left: 0;
}

.sub_sub_title li {
    margin: 0.8rem 0;
    padding-left: 1.5rem;
    position: relative;
}

.sub_sub_title li:before {
    content: "•";
    color: #3498db;
    position: absolute;
    left: 0;
    font-weight: bold;
}

code {
    background: #2c3e50;
    color: #ecf0f1;
    padding: 0.3rem 0.6rem;
    border-radius: 4px;
    font-family: monospace;
    display: inline-block;
    margin: 0.5rem 0;
}

blockquote.expert-quote {
    border-left: 5px solid #e74c3c;
    margin: 2rem 0;
    padding: 1rem 2rem;
    background: #fff5f5;
    font-style: italic;
}

blockquote.expert-quote footer {
    margin-top: 1rem;
    font-size: 0.9rem;
    color: #666;
}

.learn-more {
    margin-top: 2rem;
    text-align: right;
}

.reference-link {
    color: #3498db;
    text-decoration: none;
    padding: 0.5rem 1rem;
    border: 2px solid #3498db;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.reference-link:hover {
    background: #3498db;
    color: white;
}

/* Additional animations and interactive elements */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.media-card {
    animation: fadeIn 0.6s ease-out;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.media-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}

.media-icon {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: #3498db;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin: 2rem 0;
}

.stat-card {
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    padding: 1.5rem;
    border-radius: 8px;
    text-align: center;
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: scale(1.05);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 1rem;
    opacity: 0.9;
}

.timeline {
    position: relative;
    margin: 3rem 0;
    padding-left: 2rem;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #3498db;
}

.timeline-item {
    position: relative;
    margin-bottom: 2rem;
    padding-left: 1.5rem;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -2rem;
    top: 0.5rem;
    width: 1rem;
    height: 1rem;
    background: #3498db;
    border-radius: 50%;
}

.tech-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
    margin: 2rem 0;
}

.tech-item {
    background: #f8f9fa;
    padding: 1rem;
    border-radius: 8px;
    text-align: center;
    transition: all 0.3s ease;
}

.tech-item:hover {
    background: #3498db;
    color: white;
    transform: translateY(-5px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .blurb {
        padding: 1rem;
    }
    
    .blurb h1#title {
        font-size: 2rem;
    }
    
    .blurb h2 {
        font-size: 1.5rem;
    }
    
    .selection {
        padding: 1rem;
    }
}
</style>

<div class="blurb">
    <h1 id="title">Digital Media</h1>
    <h2>Understanding Digital Media: Visual, Audio, and Interactive Content</h2>
    
    <div tabindex="0" class="selection">
        <!-- Stats Section -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">500+</div>
                <div class="stat-label">Media Formats</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">4.5B</div>
                <div class="stat-label">Internet Users</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">82%</div>
                <div class="stat-label">Digital Media Usage</div>
            </div>
        </div>

        <p>Digital media encompasses all forms of content that can be created, viewed, distributed, modified and preserved on digital electronic devices. These representations primarily fall into several key categories:</p>
        
        <div class="media-types media-card">
            <h3>Core Media Types</h3>
            <div class="tech-grid">
                <div class="tech-item">
                    <div class="media-icon">📷</div>
                    <strong>Images</strong>
                </div>
                <div class="tech-item">
                    <div class="media-icon">🎵</div>
                    <strong>Audio</strong>
                </div>
                <div class="tech-item">
                    <div class="media-icon">🎬</div>
                    <strong>Video</strong>
                </div>
                <div class="tech-item">
                    <div class="media-icon">📝</div>
                    <strong>Text</strong>
                </div>
            </div>
        </div>

        <div class="timeline">
            <h3>Evolution of Digital Media</h3>
            <div class="timeline-item">
                <strong>1940s-1950s:</strong> Early Digital Computing
            </div>
            <div class="timeline-item">
                <strong>1960s-1970s:</strong> Digital Audio and Storage
            </div>
            <div class="timeline-item">
                <strong>1980s-1990s:</strong> Digital Images and Video
            </div>
            <div class="timeline-item">
                <strong>2000s-2010s:</strong> Social Media Revolution
            </div>
            <div class="timeline-item">
                <strong>2020s:</strong> Immersive and Interactive Media
            </div>
        </div>

        <div class="media-formats media-card">
            <h3>Popular Media Formats</h3>
            <div class="tech-grid">
                <div class="tech-item">JPG</div>
                <div class="tech-item">PNG</div>
                <div class="tech-item">MP4</div>
                <div class="tech-item">MP3</div>
                <div class="tech-item">GIF</div>
                <div class="tech-item">WAV</div>
                <div class="tech-item">PDF</div>
                <div class="tech-item">SVG</div>
            </div>
        </div>

        <div class="media-importance">
            <h3>The Role of Digital Media Today</h3>
            <p>Digital media has transformed how we communicate, learn, and entertain ourselves. It enables:</p>
            <ul>
                <li>Instant global communication</li>
                <li>Interactive learning experiences</li>
                <li>Creative expression and sharing</li>
                <li>Digital preservation of culture</li>
                <li>Cross-platform content delivery</li>
            </ul>
        </div>

        <blockquote class="expert-quote">
            <p>"Modern media comes in many different formats, including print media (books, magazines, newspapers), television, movies, video games, music, cell phones, various kinds of software, and the Internet."</p>
            <footer>— <cite><a href="https://www.mentalhelp.net/internet/types-of-media/">American Addiction Centers Resource</a></cite></footer>
        </blockquote>

        <p class="learn-more">
            <a href="https://www.htmlquick.com/reference/mime-types.html" class="reference-link">Learn more about Internet Media Types →</a>
        </p>
    </div>
</div>