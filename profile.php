<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        .section {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        h1,
        h2 {
            color: #333;
        }

        input,
        select,
        button {
            margin-top: 10px;
            padding: 10px;
            font-size: 16px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Events</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="profile.php">Invitations</a></li>
                <li><a href="profile.php">RSVP Tracking</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <section id="invitation-management" class="section">
            <h1>Invitation Management</h1>
            <form id="send-invitation-form">
                <label for="event">Select Event:</label>
                <select id="event" name="event">
                    <option value="event1">Event 1</option>
                    <option value="event2">Event 2</option>
                </select>
                <label for="email">Recipient Email:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Send Invitation</button>
            </form>

            <h2>Invitation Status</h2>
            <table id="invitation-status">
                <thead>
                    <tr>
                        <th>Event</th>
                        <th>Recipient</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </section>

        <section id="rsvp-tracking" class="section">
            <h1>RSVP Tracking</h1>
            <form id="event-select-form">
                <label for="rsvp-event">Select Event:</label>
                <select id="rsvp-event" name="event">
                    <option value="event1">Event 1</option>
                    <option value="event2">Event 2</option>
                </select>
                <button type="submit">Show RSVPs</button>
            </form>

            <h2>RSVP List</h2>
            <table id="rsvp-list">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Response Time</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </section>


        <section id="profile-info" class="section">
            <h1>User Profile</h1>
            <div class="profile-details">
                <h2>Personal Information</h2>
                <form id="profile-form">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="JohnDoe" readonly>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="johndoe@example.com">

                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" value="123-456-7890">

                    <button type="button" id="edit-profile">Edit Profile</button>
                    <button type="submit" id="save-profile" style="display:none;">Save Changes</button>
                </form>
            </div>

            <div class="event-history">
                <h2>Event History</h2>
                <ul>
                    <li>Event 1 - <a href="#">View Details</a></li>
                    <li>Event 2 - <a href="#">View Details</a></li>
                </ul>
            </div>
            <div class="feature">
                <h3>Contract Management</h3>
                <form id="contract-form">
                    <div class="form-group">
                        <label for="vendor-name">Vendor Name:</label>
                        <input type="text" id="vendor-name" name="vendor-name" placeholder="Enter vendor name">
                    </div>
                    <div class="form-group">
                        <label for="contract-details">Contract Details:</label>
                        <textarea id="contract-details" name="contract-details" placeholder="Enter contract details"></textarea>
                    </div>
                    <button type="button" onclick="addContract()">Add Contract</button>

                    <div class="account-settings">
                        <h2>Account Settings</h2>
                        <form id="settings-form">
                            <label for="password">Change Password:</label>
                            <input type="password" id="password" name="password">

                            <label for="confirm-password">Confirm Password:</label>
                            <input type="password" id="confirm-password" name="confirm-password">

                            <button type="submit">Update Password</button>
                        </form>

                    </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Event360. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const invitationForm = document.getElementById('send-invitation-form');
            invitationForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const eventSelect = document.getElementById('event');
                const emailInput = document.getElementById('email');
                const eventValue = eventSelect.value;
                const emailValue = emailInput.value;

                console.log('Sending invitation:', {
                    event: eventValue,
                    email: emailValue
                });


                setTimeout(() => {
                    alert('Invitation sent successfully!');
                    updateInvitationStatus();
                }, 1000);
            });


            function updateInvitationStatus() {
                console.log('Updating invitation status');

                setTimeout(() => {
                    const data = [{
                            event: 'Event 1',
                            recipient: 'recipient1@example.com',
                            status: 'Sent'
                        },
                        {
                            event: 'Event 2',
                            recipient: 'recipient2@example.com',
                            status: 'Pending'
                        }
                    ];
                    const tableBody = document.querySelector('#invitation-status tbody');
                    tableBody.innerHTML = '';
                    data.forEach(item => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${item.event}</td>
                            <td>${item.recipient}</td>
                            <td>${item.status}</td>
                        `;
                        tableBody.appendChild(row);
                    });
                }, 1000);
            }


            const rsvpForm = document.getElementById('event-select-form');
            rsvpForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const rsvpEventSelect = document.getElementById('rsvp-event');
                const eventValue = rsvpEventSelect.value;

                console.log('Fetching RSVPs for event:', eventValue);

                setTimeout(() => {
                    const data = [{
                            name: 'John Doe',
                            status: 'Accepted',
                            responseTime: '2024-08-01 12:00'
                        },
                        {
                            name: 'Jane Smith',
                            status: 'Rejected',
                            responseTime: '2024-08-01 12:30'
                        }
                    ];
                    const tableBody = document.querySelector('#rsvp-list tbody');
                    tableBody.innerHTML = '';
                    data.forEach(item => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${item.name}</td>
                            <td>${item.status}</td>
                            <td>${item.responseTime}</td>
                        `;
                        tableBody.appendChild(row);
                    });
                }, 1000);
            });

            const editProfileButton = document.getElementById('edit-profile');
            const saveProfileButton = document.getElementById('save-profile');
            const profileForm = document.getElementById('profile-form');

            editProfileButton.addEventListener('click', function() {
                profileForm.querySelectorAll('input').forEach(input => {
                    if (input.id !== 'username') {
                        input.removeAttribute('readonly');
                        input.style.backgroundColor = '#fff';
                    }
                });
                editProfileButton.style.display = 'none';
                saveProfileButton.style.display = 'inline';
            });

            profileForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const profileData = new FormData(profileForm);

                console.log('Updating profile with data:', Array.from(profileData.entries()));

                setTimeout(() => {
                    alert('Profile updated successfully!');
                    saveProfileButton.style.display = 'none';
                    editProfileButton.style.display = 'inline';
                    profileForm.querySelectorAll('input').forEach(input => {
                        input.setAttribute('readonly', 'true');
                    });
                }, 1000);
            });

            const settingsForm = document.getElementById('settings-form');
            settingsForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirm-password').value;

                if (password !== confirmPassword) {
                    alert('Passwords do not match!');
                    return;
                }

                console.log('Updating password:', password);


                setTimeout(() => {
                    alert('Password updated successfully!');
                }, 1000);
            });


            updateInvitationStatus();
        });
    </script>
</body>

</html>