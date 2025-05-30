<script src="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>


<script>
         var toastData = {};
                toastData.gravity = 'bottom';
                toastData.position = 'left';
                toastData.duration = 19000;
                toastData.close = false;
                toastData.style = false;
                toastData.offset = false;
                function Model(text, className) {
                    
                        Toastify({
                            newWindow: true,
                            text: text,
                            gravity: toastData.gravity,
                            position: toastData.position,
                            className: "bg-" + className + "-500",
                            stopOnFocus: true,
                            duration: toastData.duration,
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