## brew upgrade (20-7-2021)
```
==> Upgrading 70 outdated packages:
rubberband 1.9.1 -> 1.9.2
hwloc 2.4.1 -> 2.5.0
libheif 1.11.0_2 -> 1.12.0
postgresql 13.2_2 -> 13.3
ffmpeg 4.4_1 -> 4.4_2
xorgproto 2021.3 -> 2021.4
libidn2 2.3.0 -> 2.3.1
mas 1.8.1 -> 1.8.2
imagemagick@6 6.9.12-9 -> 6.9.12-19
ilmbase 2.5.5 -> 2.5.5_1
nghttp2 1.43.0 -> 1.44.0
go 1.16.3 -> 1.16.5
hugo 0.82.1 -> 0.85.0
ghostscript 9.53.3_1 -> 9.54.0
nettle 3.7.2 -> 3.7.3
gdbm 1.19 -> 1.20
gnu-getopt 2.36.2 -> 2.37
cmake 3.20.1 -> 3.21.0
libuv 1.41.0 -> 1.41.1
pango 1.48.4 -> 1.48.7
zimg 3.0.1 -> 3.0.2
phpmyadmin 5.1.0 -> 5.1.1
libogg 1.3.4 -> 1.3.5
composer 2.0.13 -> 2.1.3
harfbuzz 2.8.0_1 -> 2.8.2
glib 2.68.1 -> 2.68.3
aom 3.0.0 -> 3.1.1
hcxtools 6.1.6 -> 6.2.0
sqlite 3.35.4 -> 3.36.0
gobject-introspection 1.68.0 -> 1.68.0_1
openexr 2.5.5 -> 3.0.5_1
libgcrypt 1.9.3 -> 1.9.3_1
dialog 1.3-20210324 -> 1.3-20210621
svgo 1.3.2 -> 2.3.1
curl 7.76.1 -> 7.77.0
libmaxminddb 1.5.2 -> 1.6.0
php@7.3 7.3.27_2 -> 7.3.29_1
httpd 2.4.46_2 -> 2.4.48
snappy 1.1.8 -> 1.1.9
gifsicle 1.92 -> 1.93
freetds 1.2.21 -> 1.3
pngquant 2.13.1 -> 2.15.1
bazel 4.0.0 -> 4.1.0
zstd 1.4.9_1 -> 1.5.0
dav1d 0.8.2 -> 0.9.0
libpq 13.2 -> 13.3
tidy-html5 5.6.0 -> 5.8.0
libtasn1 4.16.0_1 -> 4.17.0
pcre2 10.36 -> 10.37_1
youtube-dl 2021.4.26 -> 2021.6.6
leptonica 1.80.0 -> 1.81.1
pcre 8.44 -> 8.45
x264 r3049 -> r3060
libidn 1.36 -> 1.37
node 16.0.0_1 -> 16.5.0
libomp 12.0.0 -> 12.0.1
libzip 1.7.3 -> 1.8.0
openldap 2.4.58 -> 2.5.5
libass 0.15.0 -> 0.15.1
python@3.8 3.8.9 -> 3.8.11
imagemagick 7.0.11-9 -> 7.1.0-4_1
guile 3.0.5 -> 3.0.7
p11-kit 0.23.22 -> 0.24.0
libx11 1.7.0 -> 1.7.2
protobuf 3.15.8 -> 3.17.3
git 2.31.1 -> 2.32.0
scrcpy 1.17_1 -> 1.18
python@3.9 3.9.4 -> 3.9.6
gnutls 3.6.15 -> 3.6.16
libpcap 1.10.0 -> 1.10.1
==> Upgrading libpcap
  1.10.0 -> 1.10.1 

==> Downloading https://ghcr.io/v2/homebrew/core/libpcap/manifests/1.10.1
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/libpcap/blobs/sha256:0aee8b23fc
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Pouring libpcap--1.10.1.big_sur.bottle.tar.gz
==> Caveats
libpcap is keg-only, which means it was not symlinked into /usr/local,
because macOS already provides this software and installing another version in
parallel can cause all kinds of trouble.

If you need to have libpcap first in your PATH, run:
  echo 'export PATH="/usr/local/opt/libpcap/bin:$PATH"' >> ~/.zshrc

For compilers to find libpcap you may need to set:
  export LDFLAGS="-L/usr/local/opt/libpcap/lib"
  export CPPFLAGS="-I/usr/local/opt/libpcap/include"

For pkg-config to find libpcap you may need to set:
  export PKG_CONFIG_PATH="/usr/local/opt/libpcap/lib/pkgconfig"

==> Summary
🍺  /usr/local/Cellar/libpcap/1.10.1: 110 files, 980.0KB
==> `brew cleanup` has not been run in 30 days, running now...
Removing: /Users/mbp/Library/Caches/Homebrew/aircrack-ng--1.6.big_sur.bottle.tar.gz... (843.8KB)
Removing: /Users/mbp/Library/Caches/Homebrew/aom--3.0.0.big_sur.bottle.tar.gz... (4MB)
Removing: /Users/mbp/Library/Caches/Homebrew/apr--1.7.0_2.big_sur.bottle.tar.gz... (401.3KB)
Removing: /Users/mbp/Library/Caches/Homebrew/aspell--0.60.8.big_sur.bottle.1.tar.gz... (115.6MB)
Removing: /Users/mbp/Library/Caches/Homebrew/bazel--4.0.0.big_sur.bottle.tar.gz... (25.4MB)
Removing: /Users/mbp/Library/Caches/Homebrew/bdw-gc--8.0.4_2.big_sur.bottle.tar.gz... (513.9KB)
Removing: /Users/mbp/Library/Caches/Homebrew/cairo--1.16.0_4.big_sur.bottle.tar.gz... (1.6MB)
Removing: /Users/mbp/Library/Caches/Homebrew/cairo--1.16.0_5.big_sur.bottle.tar.gz... (1.8MB)
Removing: /Users/mbp/Library/Caches/Homebrew/cmake--3.20.1... (18.6MB)
Removing: /Users/mbp/Library/Caches/Homebrew/composer--2.0.13.phar... (2.1MB)
Removing: /Users/mbp/Library/Caches/Homebrew/curl--7.76.1... (1.2MB)
Removing: /Users/mbp/Library/Caches/Homebrew/dav1d--0.8.2.big_sur.bottle.tar.gz... (556.8KB)
Removing: /Users/mbp/Library/Caches/Homebrew/dialog--1.3-20210324.big_sur.bottle.tar.gz... (331.9KB)
Removing: /Users/mbp/Library/Caches/Homebrew/freetds--1.2.21... (2.9MB)
Removing: /Users/mbp/Library/Caches/Homebrew/gdbm--1.19.big_sur.bottle.tar.gz... (208.9KB)
Removing: /Users/mbp/Library/Caches/Homebrew/ghostscript--9.53.3_1.big_sur.bottle.tar.gz... (33MB)
Removing: /Users/mbp/Library/Caches/Homebrew/gifsicle--1.92.big_sur.bottle.tar.gz... (152.1KB)
Removing: /Users/mbp/Library/Caches/Homebrew/git--2.31.1.big_sur.bottle.tar.gz... (15MB)
Removing: /Users/mbp/Library/Caches/Homebrew/glib--2.68.1... (6.3MB)
Removing: /Users/mbp/Library/Caches/Homebrew/gnu-getopt--2.36.2.big_sur.bottle.tar.gz... (56.5KB)
Removing: /Users/mbp/Library/Caches/Homebrew/gnu-tar--1.34.big_sur.bottle.tar.gz... (618.9KB)
Removing: /Users/mbp/Library/Caches/Homebrew/go--1.16.3.big_sur.bottle.tar.gz... (154.2MB)
Removing: /Users/mbp/Library/Caches/Homebrew/gobject-introspection--1.68.0.big_sur.bottle.tar.gz... (1.8MB)
Removing: /Users/mbp/Library/Caches/Homebrew/guile--3.0.5.big_sur.bottle.tar.gz... (11.6MB)
Removing: /Users/mbp/Library/Caches/Homebrew/harfbuzz--2.8.0_1... (2.0MB)
Removing: /Users/mbp/Library/Caches/Homebrew/harfbuzz--2.8.0.big_sur.bottle.tar.gz... (2.0MB)
Removing: /Users/mbp/Library/Caches/Homebrew/hashcat--6.1.1.big_sur.bottle.tar.gz... (26.1MB)
Removing: /Users/mbp/Library/Caches/Homebrew/hcxtools--6.1.6.big_sur.bottle.tar.gz... (194.5KB)
Removing: /Users/mbp/Library/Caches/Homebrew/htop--3.0.5.big_sur.bottle.tar.gz... (102.4KB)
Removing: /Users/mbp/Library/Caches/Homebrew/httpd--2.4.46_2.big_sur.bottle.tar.gz... (7.3MB)
Removing: /Users/mbp/Library/Caches/Homebrew/hugo--0.82.1... (33.3MB)
Removing: /Users/mbp/Library/Caches/Homebrew/hwloc--2.4.1.big_sur.bottle.tar.gz... (4.5MB)
Removing: /Users/mbp/Library/Caches/Homebrew/ilmbase--2.5.5.big_sur.bottle.tar.gz... (363.7KB)
Removing: /Users/mbp/Library/Caches/Homebrew/imagemagick--7.0.11-9... (10.2MB)
Removing: /Users/mbp/Library/Caches/Homebrew/imagemagick@6--6.9.12-9... (9.1MB)
Removing: /Users/mbp/Library/Caches/Homebrew/krb5--1.19.1.big_sur.bottle.tar.gz... (1.3MB)
Removing: /Users/mbp/Library/Caches/Homebrew/libffi--3.3_3.big_sur.bottle.tar.gz... (167.1KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libffi--3.3_2.big_sur.bottle.tar.gz... (167.2KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libheif--1.11.0_1.big_sur.bottle.tar.gz... (1.4MB)
Removing: /Users/mbp/Library/Caches/Homebrew/libheif--1.11.0.big_sur.bottle.tar.gz... (1.4MB)
Removing: /Users/mbp/Library/Caches/Homebrew/libheif--1.11.0_2.big_sur.bottle.tar.gz... (1.4MB)
Removing: /Users/mbp/Library/Caches/Homebrew/libmaxminddb--1.5.2.big_sur.bottle.tar.gz... (58.8KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libomp--12.0.0... (496.6KB)
Removing: /usr/local/Cellar/libpcap/1.10.0... (110 files, 973.7KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libpcap--1.10.0.big_sur.bottle.tar.gz... (312.8KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libpq--13.2.big_sur.bottle.tar.gz... (6.2MB)
Removing: /Users/mbp/Library/Caches/Homebrew/libpthread-stubs--0.4.big_sur.bottle.tar.gz... (3.3KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libsndfile--1.0.31.big_sur.bottle.tar.gz... (586.9KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libssh--0.9.5_1.big_sur.bottle.tar.gz... (438.7KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libtasn1--4.16.0_1.big_sur.bottle.tar.gz... (124.8KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libuv--1.41.0.big_sur.bottle.tar.gz... (1.3MB)
Removing: /Users/mbp/Library/Caches/Homebrew/libx11--1.7.0.big_sur.bottle.tar.gz... (2.2MB)
Removing: /Users/mbp/Library/Caches/Homebrew/libxau--1.0.9.big_sur.bottle.tar.gz... (28.7KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libxcb--1.14_1.big_sur.bottle.1.tar.gz... (988.9KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libxdmcp--1.1.3.big_sur.bottle.tar.gz... (30.6KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libxext--1.3.4.big_sur.bottle.tar.gz... (104.2KB)
Removing: /Users/mbp/Library/Caches/Homebrew/libxrender--0.9.10.big_sur.bottle.tar.gz... (47.4KB)
Removing: /Users/mbp/Library/Caches/Homebrew/little-cms2--2.12.big_sur.bottle.tar.gz... (397.5KB)
Removing: /Users/mbp/Library/Caches/Homebrew/mas--1.8.1.big_sur.bottle.tar.gz... (3.8MB)
Removing: /Users/mbp/Library/Caches/Homebrew/mpdecimal--2.5.1.big_sur.bottle.tar.gz... (548.3KB)
Removing: /Users/mbp/Library/Caches/Homebrew/nettle--3.7.2.big_sur.bottle.tar.gz... (942.3KB)
Removing: /Users/mbp/Library/Caches/Homebrew/nghttp2--1.43.0.big_sur.bottle.tar.gz... (970.7KB)
Removing: /Users/mbp/Library/Caches/Homebrew/node--16.0.0_1... (13.1MB)
Removing: /Users/mbp/Library/Caches/Homebrew/openexr--2.5.5.big_sur.bottle.tar.gz... (3MB)
Removing: /Users/mbp/Library/Caches/Homebrew/openjdk@11--11.0.10.big_sur.bottle.tar.gz... (181.3MB)
Removing: /Users/mbp/Library/Caches/Homebrew/openjpeg--2.4.0.big_sur.bottle.tar.gz... (2MB)
Removing: /Users/mbp/Library/Caches/Homebrew/openldap--2.4.58.big_sur.bottle.tar.gz... (2.7MB)
Removing: /Users/mbp/Library/Caches/Homebrew/pango--1.48.4.big_sur.bottle.tar.gz... (724.9KB)
Removing: /Users/mbp/Library/Caches/Homebrew/php@7.3--7.3.27_1.big_sur.bottle.tar.gz... (20.0MB)
Removing: /Users/mbp/Library/Caches/Homebrew/php@7.3--7.3.27_2... (20.0MB)
Removing: /Users/mbp/Library/Caches/Homebrew/phpmyadmin--5.1.0.tar.gz... (13MB)
Removing: /Users/mbp/Library/Caches/Homebrew/pngquant--2.13.1.big_sur.bottle.tar.gz... (51.1KB)
Removing: /Users/mbp/Library/Caches/Homebrew/postgresql--13.2_2... (11.1MB)
Removing: /Users/mbp/Library/Caches/Homebrew/postgresql--13.2_1.big_sur.bottle.tar.gz... (11.1MB)
Removing: /Users/mbp/Library/Caches/Homebrew/protobuf--3.15.8... (4.6MB)
Removing: /Users/mbp/Library/Caches/Homebrew/python@3.8--3.8.9.big_sur.bottle.tar.gz... (17.0MB)
Removing: /Users/mbp/Library/Caches/Homebrew/python@3.9--wheel--0.36.2.tar.gz... (63.9KB)
Removing: /Users/mbp/Library/Caches/Homebrew/python@3.9--pip--21.0.1.tar.gz... (1.5MB)
Removing: /Users/mbp/Library/Caches/Homebrew/python@3.9--3.9.4... (13.6MB)
Removing: /Users/mbp/Library/Caches/Homebrew/python@3.9--patch--b0716ba88a4061dcc8c9bdd1acc57f62884000d1f959075090bf2c05ffa28bf3.diff... (1.4KB)
Removing: /Users/mbp/Library/Caches/Homebrew/rubberband--1.9.1.big_sur.bottle.tar.gz... (350.2KB)
Removing: /Users/mbp/Library/Caches/Homebrew/scrcpy--1.17_1.big_sur.bottle.tar.gz... (86.1KB)
Removing: /Users/mbp/Library/Caches/Homebrew/scrcpy--1.17.big_sur.bottle.tar.gz... (86.1KB)
Removing: /Users/mbp/Library/Caches/Homebrew/sdl2--2.0.14_1.big_sur.bottle.tar.gz... (1.4MB)
Removing: /Users/mbp/Library/Caches/Homebrew/shared-mime-info--2.1.big_sur.bottle.tar.gz... (1.1MB)
Removing: /Users/mbp/Library/Caches/Homebrew/sqlite--3.35.4... (2.0MB)
Removing: /Users/mbp/Library/Caches/Homebrew/star--1.5.3.big_sur.bottle.tar.gz... (562.9KB)
Removing: /Users/mbp/Library/Caches/Homebrew/svgo--1.3.2.big_sur.bottle.tar.gz... (2.1MB)
Removing: /Users/mbp/Library/Caches/Homebrew/tcl-tk--8.6.11_1.big_sur.bottle.tar.gz... (8.5MB)
Removing: /Users/mbp/Library/Caches/Homebrew/testdisk--7.1.big_sur.bottle.1.tar.gz... (641KB)
Removing: /Users/mbp/Library/Caches/Homebrew/unbound--1.13.1.big_sur.bottle.tar.gz... (2.6MB)
Removing: /Users/mbp/Library/Caches/Homebrew/webp--1.2.0.big_sur.bottle.tar.gz... (874.8KB)
Removing: /Users/mbp/Library/Caches/Homebrew/wget--1.21.1.big_sur.bottle.tar.gz... (1.4MB)
Removing: /Users/mbp/Library/Caches/Homebrew/x264--r3049... (2.3MB)
Removing: /Users/mbp/Library/Caches/Homebrew/x265--3.5.big_sur.bottle.tar.gz... (5MB)
Removing: /Users/mbp/Library/Caches/Homebrew/xorgproto--2021.3.big_sur.bottle.tar.gz... (711.2KB)
Removing: /Users/mbp/Library/Caches/Homebrew/youtube-dl--2021.4.26... (3.5MB)
Removing: /Users/mbp/Library/Caches/Homebrew/zeromq--4.3.4.big_sur.bottle.tar.gz... (1.6MB)
Removing: /Users/mbp/Library/Caches/Homebrew/zimg--3.0.1.big_sur.bottle.tar.gz... (702.3KB)
Removing: /Users/mbp/Library/Caches/Homebrew/zstd--1.4.9_1... (1MB)
Removing: /Users/mbp/Library/Caches/Homebrew/zstd--1.4.9.big_sur.bottle.tar.gz... (1.5MB)
Removing: /Users/mbp/Library/Caches/Homebrew/mysql--8.0.23.big_sur.bottle.tar.gz... (81.3MB)
Removing: /Users/mbp/Library/Caches/Homebrew/colordiff--1.0.19.big_sur.bottle.1.tar.gz... (18.7KB)
Removing: /Users/mbp/Library/Caches/Homebrew/Cask/inssider--0.0.4.5,8.dmg... (19.7MB)
Removing: /Users/mbp/Library/Logs/Homebrew/libtiff... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/libtool... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/postgresql... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/ffmpeg... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/imagemagick@6... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/hugo... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/libuv... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/p7zip... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/composer... (104B)
Removing: /Users/mbp/Library/Logs/Homebrew/harfbuzz... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/libbluray... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/srt... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/optipng... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/unixodbc... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/libgcrypt... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/svgo... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/libvpx... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/gifsicle... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/freetds... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/pngquant... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/autoconf... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/m4... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/youtube-dl... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/x264... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/node... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/libomp... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/imagemagick... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/jpegoptim... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/automake... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/git... (64B)
Removing: /Users/mbp/Library/Logs/Homebrew/python@3.9... (4 files, 891.9KB)
==> Upgrading libpq
  13.2 -> 13.3 

==> Downloading https://ghcr.io/v2/homebrew/core/libpq/manifests/13.3
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/libpq/blobs/sha256:151bc976994f
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Pouring libpq--13.3.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/libpq/13.3: 2,277 files, 26.5MB
Removing: /usr/local/Cellar/libpq/13.2... (2,270 files, 26.5MB)
==> Upgrading gnu-getopt
  2.36.2 -> 2.37 

==> Downloading https://ghcr.io/v2/homebrew/core/gnu-getopt/manifests/2.37
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/gnu-getopt/blobs/sha256:e9b50df
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Pouring gnu-getopt--2.37.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/gnu-getopt/2.37: 10 files, 206.4KB
Removing: /usr/local/Cellar/gnu-getopt/2.36.2... (10 files, 200.0KB)
==> Upgrading curl
  7.76.1 -> 7.77.0 

==> Downloading https://ghcr.io/v2/homebrew/core/libidn2/manifests/2.3.1-1
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/libidn2/blobs/sha256:25c6ccfc50
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/nghttp2/manifests/1.44.0
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/nghttp2/blobs/sha256:8db30133ce
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/openldap/manifests/2.5.5
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/openldap/blobs/sha256:4c98f6da7
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/zstd/manifests/1.5.0
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/zstd/blobs/sha256:eae17621cfc66
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/curl/manifests/7.77.0-1
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/curl/blobs/sha256:2fea808dd9f8d
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Installing dependencies for curl: libidn2, nghttp2, openldap and zstd
==> Installing curl dependency: libidn2
==> Pouring libidn2--2.3.1.big_sur.bottle.1.tar.gz
🍺  /usr/local/Cellar/libidn2/2.3.1: 73 files, 812.3KB
==> Installing curl dependency: nghttp2
==> Pouring nghttp2--1.44.0.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/nghttp2/1.44.0: 23 files, 2.8MB
==> Installing curl dependency: openldap
==> Pouring openldap--2.5.5.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/openldap/2.5.5: 340 files, 7.5MB
==> Installing curl dependency: zstd
==> Pouring zstd--1.5.0.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/zstd/1.5.0: 31 files, 3.5MB
==> Installing curl
==> Pouring curl--7.77.0.big_sur.bottle.1.tar.gz
🍺  /usr/local/Cellar/curl/7.77.0: 486 files, 3.8MB
Removing: /usr/local/Cellar/curl/7.76.1... (484 files, 3.8MB)
==> Upgrading imagemagick@6
  6.9.12-9 -> 6.9.12-19 

==> Downloading https://ghcr.io/v2/homebrew/core/jbig2dec/manifests/0.19
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/jbig2dec/blobs/sha256:44aa9639d
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/libidn/manifests/1.37
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/libidn/blobs/sha256:87d313494a3
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/ghostscript/manifests/9.54.0
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/ghostscript/blobs/sha256:cfe91b
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/imagemagick/6/manifests/6.9.12-
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/imagemagick/6/blobs/sha256:b01a
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Installing dependencies for imagemagick@6: jbig2dec, libidn and ghostscript
==> Installing imagemagick@6 dependency: jbig2dec
==> Pouring jbig2dec--0.19.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/jbig2dec/0.19: 13 files, 373.6KB
==> Installing imagemagick@6 dependency: libidn
==> Pouring libidn--1.37.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/libidn/1.37: 73 files, 1MB
==> Installing imagemagick@6 dependency: ghostscript
==> Pouring ghostscript--9.54.0.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/ghostscript/9.54.0: 683 files, 149.0MB
==> Installing imagemagick@6
==> Pouring imagemagick@6--6.9.12-19.big_sur.bottle.tar.gz
==> Caveats
imagemagick@6 is keg-only, which means it was not symlinked into /usr/local,
because this is an alternate version of another formula.

If you need to have imagemagick@6 first in your PATH, run:
  echo 'export PATH="/usr/local/opt/imagemagick@6/bin:$PATH"' >> ~/.zshrc

For compilers to find imagemagick@6 you may need to set:
  export LDFLAGS="-L/usr/local/opt/imagemagick@6/lib"
  export CPPFLAGS="-I/usr/local/opt/imagemagick@6/include"

For pkg-config to find imagemagick@6 you may need to set:
  export PKG_CONFIG_PATH="/usr/local/opt/imagemagick@6/lib/pkgconfig"

==> Summary
🍺  /usr/local/Cellar/imagemagick@6/6.9.12-19: 770 files, 28MB
Removing: /usr/local/Cellar/imagemagick@6/6.9.12-9... (770 files, 27.9MB)
==> Upgrading php@7.3
  7.3.27_2 -> 7.3.29_1 

==> Downloading https://ghcr.io/v2/homebrew/core/freetds/manifests/1.3
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/freetds/blobs/sha256:d5af44165c
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/pcre/manifests/8.45
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/pcre/blobs/sha256:fb2fefbe12327
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/gdbm/manifests/1.20
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/gdbm/blobs/sha256:ea88ce09e9344
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/sqlite/manifests/3.36.0
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/sqlite/blobs/sha256:2c9c5f05c16
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/python/3.9/manifests/3.9.6
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/python/3.9/blobs/sha256:1397f8f
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/glib/manifests/2.68.3
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/glib/blobs/sha256:ebfa4f4aa1622
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/libzip/manifests/1.8.0
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/libzip/blobs/sha256:f5b0d74305b
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/tidy-html5/manifests/5.8.0
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/tidy-html5/blobs/sha256:9127cf1
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/php/7.3/manifests/7.3.29_1
######################################################################## 100.0%
==> Downloading https://ghcr.io/v2/homebrew/core/php/7.3/blobs/sha256:5932ad4930
==> Downloading from https://pkg-containers.githubusercontent.com/ghcr1/blobs/sh
######################################################################## 100.0%
==> Installing dependencies for php@7.3: freetds, pcre, gdbm, sqlite, python@3.9, glib, libzip and tidy-html5
==> Installing php@7.3 dependency: freetds
==> Pouring freetds--1.3.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/freetds/1.3: 1,261 files, 13.8MB
==> Installing php@7.3 dependency: pcre
==> Pouring pcre--8.45.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/pcre/8.45: 204 files, 5.8MB
==> Installing php@7.3 dependency: gdbm
==> Pouring gdbm--1.20.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/gdbm/1.20: 24 files, 825.0KB
==> Installing php@7.3 dependency: sqlite
==> Pouring sqlite--3.36.0.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/sqlite/3.36.0: 11 files, 4.2MB
==> Installing php@7.3 dependency: python@3.9
==> Pouring python@3.9--3.9.6.big_sur.bottle.tar.gz
==> /usr/local/Cellar/python@3.9/3.9.6/bin/python3 -m ensurepip
==> /usr/local/Cellar/python@3.9/3.9.6/bin/python3 -m pip install -v --no-deps -
🍺  /usr/local/Cellar/python@3.9/3.9.6: 3,078 files, 54.6MB
==> Installing php@7.3 dependency: glib
==> Pouring glib--2.68.3.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/glib/2.68.3: 442 files, 21MB
==> Installing php@7.3 dependency: libzip
==> Pouring libzip--1.8.0.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/libzip/1.8.0: 144 files, 771KB
==> Installing php@7.3 dependency: tidy-html5
==> Pouring tidy-html5--5.8.0.big_sur.bottle.tar.gz
🍺  /usr/local/Cellar/tidy-html5/5.8.0: 14 files, 2.9MB
==> Installing php@7.3
==> Pouring php@7.3--7.3.29_1.big_sur.bottle.tar.gz
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear config-set php_ini /usr/local/et
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear config-set php_dir /usr/local/sh
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear config-set doc_dir /usr/local/sh
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear config-set ext_dir /usr/local/li
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear config-set bin_dir /usr/local/op
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear config-set data_dir /usr/local/s
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear config-set cfg_dir /usr/local/sh
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear config-set www_dir /usr/local/sh
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear config-set man_dir /usr/local/sh
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear config-set test_dir /usr/local/s
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear config-set php_bin /usr/local/op
==> /usr/local/Cellar/php@7.3/7.3.29_1/bin/pear update-channels
==> Caveats
To enable PHP in Apache add the following to httpd.conf and restart Apache:
    LoadModule php7_module /usr/local/opt/php@7.3/lib/httpd/modules/libphp7.so

    <FilesMatch \.php$>
        SetHandler application/x-httpd-php
    </FilesMatch>

Finally, check DirectoryIndex includes index.php
    DirectoryIndex index.php index.html

The php.ini and php-fpm.ini file can be found in:
    /usr/local/etc/php/7.3/

php@7.3 is keg-only, which means it was not symlinked into /usr/local,
because this is an alternate version of another formula.

If you need to have php@7.3 first in your PATH, run:
  echo 'export PATH="/usr/local/opt/php@7.3/bin:$PATH"' >> ~/.zshrc
  echo 'export PATH="/usr/local/opt/php@7.3/sbin:$PATH"' >> ~/.zshrc

For compilers to find php@7.3 you may need to set:
  export LDFLAGS="-L/usr/local/opt/php@7.3/lib"
  export CPPFLAGS="-I/usr/local/opt/php@7.3/include"


To have launchd start php@7.3 now and restart at login:
  brew services start php@7.3
Or, if you don't want/need a background service you can just run:
  php-fpm
==> Summary
🍺  /usr/local/Cellar/php@7.3/7.3.29_1: 521 files, 77.3MB
Removing: /usr/local/Cellar/php@7.3/7.3.27_2... (523 files, 77.7MB)
Error: Directory not empty @ dir_s_rmdir - /usr/local/Cellar/php@7.3/7.3.27_2
```
