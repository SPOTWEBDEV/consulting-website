<link href="
https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css
" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>



<script>
         var toastData = {};
                toastData.gravity = 'bottom';
                toastData.position = 'left';
                toastData.duration = 3000;
                toastData.close = false;
                toastData.style = false;
                toastData.offset = false;
                function Model(text, className) {
                    
                        Toastify({
                            newWindow: true,
                            text: text,
                            gravity: toastData.gravity,
                            position: toastData.position,
                            className: "bg-" + className,
                            stopOnFocus: true,
                            duration: 15000,
                            offset: {
                                x: toastData.offset ? 50 : 0, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                                y: toastData.offset ? 10 : 0, // vertical axis - can be a number or a string indicating unity. eg: '2em'
                            },
                            duration: toastData.duration,
                            close: toastData.close == "close" ? true : false,
                            style: toastData.style == "style" ? {
                                background: "#3b82f6"
                            } : "",
                        }).showToast();
                    
                }
</script>