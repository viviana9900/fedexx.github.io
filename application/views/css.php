@import "compass/css3";

@import "compass/css3";
@import "compass/reset";
*{
  @include box-sizing(border-box);
}
header{
  width: 100%;
  height: 300px;
  background-color: #3498db;
  text-align: center;
  position: relative;
  position: fixed;
  top: 0;
  overflow: hidden;
  @include transition(all .5s ease);
  h1{
    font-size: 42px;
    color: #fff;
    line-height: 230px;
    text-transform: uppercase;
    font-weight: 100;
    @include transition(all .3s ease);
  }
  nav{
    position: absolute;
    bottom: 0;
    height: 60px;
    line-height: 60px;
    width: 100%;
    background-color: rgba(0,0,0,.1);
    a{
      color: #fff;
      display: inline-block;
      padding: 10px 15px;
      line-height: 1;
      text-decoration: none;
       @include border-radius(2px);
        &:hover{
          @include box-shadow(0 0 0 1px #fff);
        }
    }
  }
}
