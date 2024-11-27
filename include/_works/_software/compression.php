{{ ... }}
<h1 id="title">File Compression: The Art of Digital Space-Saving</h1>
<div class="blurb">
    <section class="intro">
        <p tabindex="0" class="selection">
            File compression is a fundamental technology that revolutionized digital storage and transmission by reducing file sizes while preserving their content. This essential process enables efficient storage utilization and faster data transmission across networks.
        </p>
    </section>

    <section class="timeline">
        <h2>Evolution of File Compression</h2>
        <div class="timeline-grid">
            <div class="timeline-item" tabindex="0">
                <h3>1960s: The Beginning</h3>
                <p class="selection">
                    The era of run-length encoding marked the dawn of file compression. This pioneering method was primarily used for compressing data on magnetic tapes by consolidating repeated data values.
                </p>
            </div>

            <div class="timeline-item" tabindex="0">
                <h3>1980s: The PC Revolution</h3>
                <p class="selection">
                    The personal computer boom sparked the development of more sophisticated compression algorithms. The groundbreaking Lempel-Ziv-Welch (LZW) algorithm emerged, powering popular formats like GIF and ZIP.
                </p>
            </div>

            <div class="timeline-item" tabindex="0">
                <h3>1990s: The Internet Age</h3>
                <p class="selection">
                    The rise of the internet and multimedia content drove the creation of specialized compression formats. Revolutionary standards like MP3 for audio and JPEG for images transformed digital media distribution.
                </p>
            </div>

            <div class="timeline-item" tabindex="0">
                <h3>Today: Modern Compression</h3>
                <p class="selection">
                    Modern compression technology offers diverse solutions for different data types, balancing compression efficiency with processing speed and compatibility.
                </p>
            </div>
        </div>
    </section>

    <section class="compression-formats">
        <h2>Popular Compression Formats</h2>
        <div class="formats-grid">
            <details class="format-card">
                <summary tabindex="0" class="selection">ZIP Format</summary>
                <fieldset tabindex="0" class="selection">
                    <div class="format-content">
                        <h4>Features:</h4>
                        <ul>
                            <li>Multi-file archiving</li>
                            <li>Password protection</li>
                            <li>Universal compatibility</li>
                            <li>Industry standard format</li>
                        </ul>
                        <p>The most widely used compression format, perfect for general-purpose file compression and archiving.</p>
                    </div>
                </fieldset>
            </details>

            <details class="format-card">
                <summary tabindex="0" class="selection">RAR Format</summary>
                <fieldset tabindex="0" class="selection">
                    <div class="format-content">
                        <h4>Features:</h4>
                        <ul>
                            <li>Advanced compression</li>
                            <li>Archive splitting</li>
                            <li>Error recovery</li>
                            <li>Strong encryption</li>
                        </ul>
                        <p>A powerful format offering advanced features and superior compression ratios for complex archiving needs.</p>
                    </div>
                </fieldset>
            </details>

            <details class="format-card">
                <summary tabindex="0" class="selection">TAR Format</summary>
                <fieldset tabindex="0" class="selection">
                    <div class="format-content">
                        <h4>Features:</h4>
                        <ul>
                            <li>Unix-style archiving</li>
                            <li>Metadata preservation</li>
                            <li>Combinable with compression</li>
                            <li>Perfect for backups</li>
                        </ul>
                        <p>Commonly used in Unix-like systems, often combined with compression algorithms like gzip or bzip2.</p>
                    </div>
                </fieldset>
            </details>

            <details class="format-card">
                <summary tabindex="0" class="selection">GZ Format</summary>
                <fieldset tabindex="0" class="selection">
                    <div class="format-content">
                        <h4>Features:</h4>
                        <ul>
                            <li>DEFLATE algorithm</li>
                            <li>Fast compression</li>
                            <li>Single-file focus</li>
                            <li>Cross-platform support</li>
                        </ul>
                        <p>Efficient single-file compression using the DEFLATE algorithm, ideal for quick compression tasks.</p>
                    </div>
                </fieldset>
            </details>

            <details class="format-card">
                <summary tabindex="0" class="selection">BZ2 Format</summary>
                <fieldset tabindex="0" class="selection">
                    <div class="format-content">
                        <h4>Features:</h4>
                        <ul>
                            <li>High compression ratio</li>
                            <li>Block-sorting compression</li>
                            <li>Data integrity checks</li>
                            <li>Open-source format</li>
                        </ul>
                        <p>Offers superior compression ratios using the bzip2 algorithm, perfect for text-based content.</p>
                    </div>
                </fieldset>
            </details>
        </div>
    </section>
</div>

<style>
    .blurb {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }

    h1, h2, h3, h4 {
        color: #2c3e50;
    }

    .intro {
        font-size: 1.1em;
        line-height: 1.6;
        margin-bottom: 40px;
        color: #34495e;
    }

    .timeline-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin: 30px 0;
    }

    .timeline-item {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        transition: transform 0.2s ease;
    }

    .timeline-item:hover {
        transform: translateY(-5px);
    }

    .timeline-item h3 {
        color: #2980b9;
        margin-top: 0;
    }

    .formats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin: 30px 0;
    }

    .format-card {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        transition: transform 0.2s ease;
    }

    .format-card:hover {
        transform: translateY(-5px);
    }

    .format-card summary {
        font-size: 1.2rem;
        font-weight: 600;
        color: #34495e;
        padding: 15px;
        cursor: pointer;
        border-radius: 8px;
        background: #f8f9fa;
    }

    .format-content {
        padding: 15px;
    }

    .format-content ul {
        list-style-type: none;
        padding-left: 0;
    }

    .format-content li {
        margin-bottom: 8px;
        padding-left: 20px;
        position: relative;
    }

    .format-content li:before {
        content: "•";
        color: #3498db;
        position: absolute;
        left: 0;
    }

    fieldset {
        border: none;
        padding: 0;
        margin: 0;
    }

    /* Accessibility improvements */
    *:focus {
        outline: 2px solid #3498db;
        outline-offset: 2px;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .timeline-grid,
        .formats-grid {
            grid-template-columns: 1fr;
        }
        
        .blurb {
            padding: 15px;
        }
    }
</style>
{{ ... }}
