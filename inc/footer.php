    <div class="bg-primary" data-aos="fade">
      <div class="container">
        <div class="row" style="margin: center;">
          <a href="https://facebook.com/vvmteam/" target=_blank class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
          <a href="https://youtube.com/vietvocaloidmirochan/" target=_blank class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
      </div>
    </div>


          </div>
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Chúng tôi là ai?</h3>
              <p>Được thành lập ngày 11/4/2014, từ 1 thành viên duy nhất cùng cái tên nguyên bản VietVocaloid Miro-chan với định hướng ban đầu là cover những bài hát Vocaloid sang tiếng Việt, V.V.M Team đã phát triển thành một nhóm nhỏ với 8 thành viên hoạt động chủ yếu ở 2 lĩnh vực: Cover Vocaloid và Việt hóa Game. Nhóm hoạt động dựa trên sở thích cũng như đam mê, nên sẽ luôn bốc cháy hết mình với các dự án.</p>
            </div>
          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Bản quyền &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Thuộc sở hữu của <a href="https://youtube.com/vietvocaloidmirochan/" target="_blank" >V.V.M Team</a><br>Số lượt truy cập:
        <?php
          $CountFile = "count.txt";
          $CF = fopen ($CountFile, "r");
          $Views = fread ($CF, filesize ($CountFile));
          fclose ($CF);
          $Views++; 

          $CF = fopen ($CountFile, "w");
          fwrite ($CF, $Views); 
          fclose ($CF); 
          echo ($Views);
          ?>
            </p>
          </div>
          
        </div>
      </div>
    </footer>
