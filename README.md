# belajarGIT

Daftar tugas/ branch
1. Tugas-git
2. Tugas-html
3. Tugas-css
4. Tugas-js
5. Tugas-midProject
6. Tugas-php
7. Tugas-finalProject

8. Daftar perintah GIT
9. 
nelwa@Thania MINGW64 ~ (master)
$ cd Desktop

nelwa@Thania MINGW64 ~/Desktop (master)
$ cd BelajarGIT

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main|MERGING)
$ git branch
  Tugas-git
  Tugas-html
* main

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main|MERGING)
$ git checkout main
Already on 'main'
A       Tugas-git.txt
Your branch is up to date with 'origin/main'.

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git merge Tugas-git
error: Your local changes to the following files would be overwritten by
  Tugas-git.txt
Merge with strategy ort failed.

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ ^C

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git add Tugas-git.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git commit -m "menambahkan perubahan pada Tugas-git.txt"
[main 43dc304] menambahkan perubahan pada Tugas-git.txt
 1 file changed, 1 insertion(+)
 create mode 100644 Tugas-git.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git checkout main
Already on 'main'
Your branch is ahead of 'origin/main' by 1 commit.
  (use "git push" to publish your local commits)

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ ^C

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git push origin main
Enumerating objects: 3, done.
Counting objects: 100% (3/3), done.
Delta compression using up to 2 threads
Compressing objects: 100% (2/2), done.
Writing objects: 100% (2/2), 303 bytes | 303.00 KiB/s, done.
Total 2 (delta 0), reused 0 (delta 0), pack-reused 0 (from 0)
To https://github.com/thaniagnnelwan/belajarGIT.git
   ed4d3a4..43dc304  main -> main

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git branch Tugas-css

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git checkout Tugas-css
Switched to branch 'Tugas-css'

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-css)
$ touch Tugas-css.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-css)
$ git add TUgas-css.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-css)
$ git commit -m "menambahkan file Tugas-css.txt"
On branch Tugas-css
Untracked files:
  (use "git add <file>..." to include in what will be committed)
        Tugas-css.txt

nothing added to commit but untracked files present (use "git add" to track)

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-css)
$ ^C

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-css)
$ git mv TUgas-css.txt Tugas-css.txt
fatal: not under version control, source=TUgas-css.txt, destination=Tugas-css.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-css)
$ ^C

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-css)
$ git add Tugas-css.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-css)
$ git commit -m "menambahkan file Tugas-css.txt"
[Tugas-css ee87847] menambahkan file Tugas-css.txt
 1 file changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 Tugas-css.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-css)
$ git add Tugas-css.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-css)
$ git commit -m "menambahkan perubahan pada Tugas-css.txt"
[Tugas-css ecb582b] menambahkan perubahan pada Tugas-css.txt
 1 file changed, 1 insertion(+)

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-css)
$ git checkout main
Switched to branch 'main'
Your branch is up to date with 'origin/main'.

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git merge Tugas-css
Updating 43dc304..ecb582b
Fast-forward
 Tugas-css.txt | 1 +
 1 file changed, 1 insertion(+)
 create mode 100644 Tugas-css.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git push origin main
Enumerating objects: 7, done.
Counting objects: 100% (7/7), done.
Delta compression using up to 2 threads
Compressing objects: 100% (4/4), done.
Writing objects: 100% (6/6), 565 bytes | 565.00 KiB/s, done.
Total 6 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (1/1), done.
To https://github.com/thaniagnnelwan/belajarGIT.git
   43dc304..ecb582b  main -> main

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$

nelwa@Thania MINGW64 ~ (master)
$ cd Desktop

nelwa@Thania MINGW64 ~/Desktop (master)
$ cd BelajarGIT

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git branch
  Tugas-css
  Tugas-git
  Tugas-html
  Tugas-js
* main

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git push origin main
Enumerating objects: 9, done.
Counting objects: 100% (9/9), done.
Delta compression using up to 2 threads
Compressing objects: 100% (6/6), done.
Writing objects: 100% (7/7), 783 bytes | 783.00 KiB/s, done.
Total 7 (delta 3), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (3/3), completed with 2 local objects.
To https://github.com/thaniagnnelwan/belajarGIT.git
   2d90f19..acae08f  main -> main

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git branch Tugas-php

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git checkout Tugas-php
Switched to branch 'Tugas-php'

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-php)
$ touch Tugas-php.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-php)
$ git add Tugas-php.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-php)
$ git commit -m "menambahkan file Tugas-php.txt"
[Tugas-php 0522af4] menambahkan file Tugas-php.txt
 1 file changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 Tugas-php.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-php)
$ git add Tugas-php.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-php)
$ git commit -m "menambahkan perubahan pada Tugas-php.txt"
[Tugas-php 01dde24] menambahkan perubahan pada Tugas-php.txt
 1 file changed, 1 insertion(+)

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-php)
$ git checkout main
Switched to branch 'main'
Your branch is up to date with 'origin/main'.

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git merge Tugas-php
Updating acae08f..01dde24
Fast-forward
 Tugas-php.txt | 1 +
 1 file changed, 1 insertion(+)
 create mode 100644 Tugas-php.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git push origin main
Enumerating objects: 6, done.
Counting objects: 100% (6/6), done.
Delta compression using up to 2 threads
Compressing objects: 100% (4/4), done.
Writing objects: 100% (5/5), 475 bytes | 475.00 KiB/s, done.
Total 5 (delta 2), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (2/2), completed with 1 local object.
To https://github.com/thaniagnnelwan/belajarGIT.git
   acae08f..01dde24  main -> main

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git branch Tugas-midProject

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git checkout Tugas-midProject
Switched to branch 'Tugas-midProject'

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-midProject)
$ touch Tugas-midProject.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-midProject)
$ git add Tugas-midProject.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-midProject)
$ git commit -m "menambahkan file Tugas-midProject.txt"
[Tugas-midProject c807b88] menambahkan file Tugas-midProject.txt
 1 file changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 Tugas-midProject.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-midProject)
$ git add Tugas-midProject.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-midProject)
$ git commit -m "menambahkan perubahan pada Tugas-midProject.txt"
[Tugas-midProject 00a022b] menambahkan perubahan pada Tugas-midProject.txt
 1 file changed, 1 insertion(+)

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-midProject)
$ git checkout main
Switched to branch 'main'
Your branch is up to date with 'origin/main'.

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git merge Tugas-midProject
Updating 01dde24..00a022b
Fast-forward
 Tugas-midProject.txt | 1 +
 1 file changed, 1 insertion(+)
 create mode 100644 Tugas-midProject.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git push origin main
Enumerating objects: 6, done.
Counting objects: 100% (6/6), done.
Delta compression using up to 2 threads
Compressing objects: 100% (4/4), done.
Writing objects: 100% (5/5), 528 bytes | 528.00 KiB/s, done.
Total 5 (delta 2), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (2/2), completed with 1 local object.
To https://github.com/thaniagnnelwan/belajarGIT.git
   01dde24..00a022b  main -> main

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git branch Tugas-finalProject

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git branch
  Tugas-css
  Tugas-finalProject
  Tugas-git
  Tugas-html
  Tugas-js
  Tugas-midProject
  Tugas-php
* main

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git branch
  Tugas-css
  Tugas-finalProject
  Tugas-git
  Tugas-html
  Tugas-js
  Tugas-midProject
  Tugas-php
* main

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git checkout Tugas-finalProject
Switched to branch 'Tugas-finalProject'

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-finalProject)
$ touch Tugas-finalProject.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-finalProject)
$ git add Tugas-finalProject.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-finalProject)
$ git commit -m "menambahkan file Tugas-finalProject.txt"
[Tugas-finalProject 1d828a7] menambahkan file Tugas-finalProject.txt
 1 file changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 Tugas-finalProject.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-finalProject)
$ git add Tugas-finalProject.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-finalProject)
$ git commit -m "menambahkan perubahan pada Tugas-finalProject.txt"
[Tugas-finalProject e16f4d1] menambahkan perubahan pada Tugas-finalProject.txt
 1 file changed, 1 insertion(+)

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (Tugas-finalProject)
$ git checkout main
Switched to branch 'main'
Your branch is up to date with 'origin/main'.

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git merge Tugas-finalProject
Updating 00a022b..e16f4d1
Fast-forward
 Tugas-finalProject.txt | 1 +
 1 file changed, 1 insertion(+)
 create mode 100644 Tugas-finalProject.txt

nelwa@Thania MINGW64 ~/Desktop/BelajarGIT (main)
$ git push origin main
Enumerating objects: 6, done.
Counting objects: 100% (6/6), done.
Delta compression using up to 2 threads
Compressing objects: 100% (4/4), done.
Writing objects: 100% (5/5), 503 bytes | 251.00 KiB/s, done.
Total 5 (delta 2), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (2/2), completed with 1 local object.
To https://github.com/thaniagnnelwan/belajarGIT.git
   00a022b..e16f4d1  main -> main

