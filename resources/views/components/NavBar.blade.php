<nav>
 
        <div class="nav-container">
          
            <span class="logo"><a href="/" wiree:navigate>Nik<span>Jil</span></a></span>
            
           <ul class="nav--ul__two">
             @auth
          <!--      <span class="balance" id="taka56">{{ Auth::user()->balance }} BDT</span> -->
          <span> <i class="fas fa-search" style="font-size:26px;"></i></span>
                
                @else
                    <span class="balance"><a href="/login" wiree:navigate>Login</a></span>
                    <span class="balance"><a href="/signup">Signup</a></span>
                    @endauth 
                 <span id="openmenu" class="mmm" style="font-size:25px;cursor:pointer;" >&#9776;</span> 
                </ul>
        </div>
        
</nav>

@include('components/SideNav')