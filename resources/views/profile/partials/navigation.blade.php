<style>
    a[aria-current="page"] {
        border-bottom: 3px solid #41B2F2;
    }
</style>
<section>
    <div class="flex -mb-4 gap-10 text-lg mt-5 text-[#051036]" id='nav'>
        <div><a class="pb-1" href="/profile">Account</a></div>
        <div><a class="pb-1" href="/profile/loyalty">Loyalty</a></div>
        <div><a class="pb-1" href="/profile/password">Account Password</a></div>
        <div><a class="pb-1" href="/profile/faqs">FaQs</a></div>
    </div>
</section>
<script type="application/javascript">
document.querySelectorAll('#nav div a').forEach
        (link =>{
            if (link.href == window.location.href){
                link.setAttribute('aria-current', 'page')
            }
        })
        </script>
