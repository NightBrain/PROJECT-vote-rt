
<script>
                        if ("Notification" in window){
                            
                            if (Notification.permission === 'granted') {
                                notify();
                            } else {
                                Notification.requestPermission().then((res) => {
                                    if (res === 'granted'){
                                        notify();
                                    } else if (res === 'denied') {
                                        console.log("Notification access denied");
                                    } else if (res === 'default') {
                                        console.log("Notification permission not given");
                                    }
                                })
                            }

                        } else {
                            console.error("Notification not supported");
                        }

                        function notify() {

                        const notification = new Notification('Problem notification❗️',{
                            body: `นักศึกษาหรืออาจารย์กำลังประสบปัญหา`,
                            icon: 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Warning.svg/2219px-Warning.svg.png',
                            vibration: [300,200,300],
                        });

                        notification.addEventListener('click', function() {
                            window.open('#');
                        });

                        }



                        


                        </script>