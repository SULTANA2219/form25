document.querySelector('form').addEventListener('submit', function(event)
                                                {
                                                  const username = document.getElementById('username').value;
                                                  const email = document.getElementById('email').value;

                                                if (username.length < 3) {
                                                  alert('Username must be at least 3 characters long.');
                                                  event.preventDefault(); //Stop form submission
                                                }
                                                  if(!email.includes('@')) {
                                                    alert('Please enter a valid email address.');
                                                    event.preventDefault();
                                                  }
                                                });

