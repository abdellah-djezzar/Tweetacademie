<!-- <ul class="position-fixed ulAside">
<li><a href="index.php?action=home">Tweet</a></li>
<li><a href="index.php?action=tendance">Tendance</a></li>
<li><a href="index.php?action=hashtag">Hashtag</a></li>
</ul> -->

<ul class="position-fixed ulAside">
<li><button class="learn-more"><a href="index.php?action=home">Tweet</a></button></li>
<li><button class="learn-more"><a href="index.php?action=hashtag">Hashtag</a></button></li>
<li><button class="learn-more">notif?</button></li>
</ul>

<style>
  li button {
    margin-top:9px;
    justify-content:center;
    cursor: pointer;
    width:140px;
    padding:4px;
    border: 0;
    border-radius:3px;
    text-decoration: none;
    font-size: 12pt;
    font-family: inherit;
    background:rgba(29, 161, 242, 0.7);
    color:#383b3d;
  }
      li button:hover {
        background:#1DA1F2;
          box-shadow: 0 0 0 1.5px #4C4F51, 0 5px 0 0 #1DA1F2;
          transition: transform 150ms cubic-bezier(0, 0, 0.50, 1), background 150ms cubic-bezier(0, 0, 0.58, 1);
        }
</style>

<!-- Si quelqu'un peut display les button au centre du aside de home svp -->