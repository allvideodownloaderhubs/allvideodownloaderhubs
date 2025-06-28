# AllVideoDownloaderHubs

A professional video downloader web application supporting multiple platforms including YouTube, TikTok, Facebook, Instagram, Twitter, Vimeo, and Dailymotion.

## Features

- ✅ Download videos from 7+ major platforms
- ✅ Multiple quality options (1080p, 720p, 480p, Audio Only)
- ✅ No watermarks on TikTok downloads
- ✅ Responsive design for all devices
- ✅ Professional advertisement spaces
- ✅ Real-time video processing
- ✅ Clean, modern UI with social media integration

## Supported Platforms

- YouTube (HD, Full HD, 4K videos and playlists)
- TikTok (Videos without watermark)
- Facebook (Public videos and posts)
- Instagram (Posts, stories, and IGTV)
- Twitter/X (Video tweets and threads)
- Vimeo (HD and premium content)
- Dailymotion (All quality formats)

## Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6+), Bootstrap 5.3.3
- **Backend**: Python 3.11, Flask, yt-dlp
- **Icons**: FontAwesome 6.5.2
- **Fonts**: Google Fonts (Inter)

## Installation & Setup

1. Clone the repository:
```bash
git clone https://github.com/yourusername/allvideodownloaderhubs.git
cd allvideodownloaderhubs
```

2. Install Python dependencies:
```bash
pip install flask flask-cors yt-dlp requests
```

3. Run the application:
```bash
python app.py
```

4. Open your browser and navigate to `http://localhost:5000`

## ⚠️ Important: Why GitHub Pages Won't Work

Your code doesn't work on GitHub Pages because this is a **full-stack application** that requires:

- **Backend Server**: Python Flask server running `app.py`
- **Video Processing**: yt-dlp library for downloading videos
- **API Endpoints**: Server-side processing for `/api/video-info` and `/api/download`

GitHub Pages only hosts static HTML files and cannot run Python servers or process videos.

## 🚀 Deployment Solutions

### Option 1: Heroku (Recommended)
```bash
# All files are ready! Just push to GitHub and deploy:
heroku create your-app-name
git push heroku main
```

### Option 2: Railway 
1. Connect your GitHub repo at railway.app
2. Automatic Python Flask detection
3. Zero configuration needed

### Option 3: Render
1. Connect repo at render.com  
2. Select "Web Service"
3. Automatic deployment

### Files You Need to Copy to GitHub:
```
app.py              # Flask backend (REQUIRED)
static/index.html   # Frontend interface  
Procfile           # Deployment config
runtime.txt        # Python version
pyproject.toml     # Dependencies
```

## API Endpoints

- `GET /` - Serve main application
- `POST /api/video-info` - Get video information
- `POST /api/download` - Download video
- `GET /api/platforms` - Get supported platforms
- `GET /health` - Health check

## Usage

1. Paste a video URL from any supported platform
2. Click "Download" to analyze the video
3. Choose your preferred format and quality
4. Click the download button to get your video

## Legal Notice

This tool is for educational purposes only. Please respect copyright laws and platform terms of service. Only download videos you have permission to download.

## License

MIT License - see LICENSE file for details
