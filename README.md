# chasewoodford.com (v5)
Personal website for Chase Woodford built with [11ty](https://www.11ty.dev/), [Nunjucks](https://mozilla.github.io/nunjucks/), and [Bootstrap](https://getbootstrap.com/).

## Quick Start

**`npm start`**

Run 11ty with hot reload at localhost:8080

## Production Notes

- Generate webp files using following FFmpeg command after converting screen recording to MP4

**`ffmpeg -y -i input.mp4 -loop 0 -vf scale=600:-1 output.webp`**