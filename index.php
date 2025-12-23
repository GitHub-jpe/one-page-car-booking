<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RideNow - Premium Car Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .main-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .booking-form, .admin-panel {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .booking-form:hover, .admin-panel:hover {
            transform: translateY(-5px);
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 30px;
            color: #2d3748;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #4a5568;
        }

        input, select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #f7fafc;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #667eea;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 14px 32px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .btn:active {
            transform: translateY(0);
        }

        .btn-secondary {
            background: #718096;
            margin-top: 10px;
        }

        .btn-secondary:hover {
            box-shadow: 0 10px 20px rgba(113, 128, 150, 0.3);
        }

        .booking-item {
            background: #f7fafc;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 4px solid #667eea;
            transition: all 0.3s ease;
            animation: slideIn 0.5s ease;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .booking-item:hover {
            background: #edf2f7;
            transform: translateX(5px);
        }

        .booking-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .booking-id {
            font-weight: 600;
            color: #667eea;
            font-size: 1.1rem;
        }

        .booking-status {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .status-pending {
            background: #fed7d7;
            color: #c53030;
        }

        .status-confirmed {
            background: #c6f6d5;
            color: #2f855a;
        }

        .status-completed {
            background: #bee3f8;
            color: #2b6cb0;
        }

        .booking-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            font-size: 0.9rem;
            color: #4a5568;
        }

        .booking-actions {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .btn-small {
            padding: 6px 12px;
            font-size: 0.85rem;
            border-radius: 6px;
            flex: 1;
        }

        .btn-confirm {
            background: #48bb78;
        }

        .btn-cancel {
            background: #f56565;
        }

        .btn-complete {
            background: #4299e1;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .filter-section {
            margin-bottom: 20px;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .filter-select {
            flex: 1;
            padding: 8px 12px;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            font-size: 0.9rem;
        }

        .empty-state {
            text-align: center;
            padding: 40px;
            color: #718096;
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #cbd5e0;
        }

        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .booking-form, .admin-panel {
                padding: 25px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }

        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 10px;
            color: white;
            font-weight: 500;
            transform: translateX(400px);
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        .notification.show {
            transform: translateX(0);
        }

        .notification.success {
            background: #48bb78;
        }

        .notification.error {
            background: #f56565;
        }

        .notification.info {
            background: #4299e1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-car"></i> RideNow</h1>
            <p>Premium Car Booking Experience</p>
        </div>

        <div class="main-content">
            <div class="booking-form">
                <h2 class="section-title">
                    <i class="fas fa-calendar-plus"></i>
                    Book Your Ride
                </h2>
                <form id="bookingForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="John Doe" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" placeholder="+233 24 123 4567" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="john@example.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="pickup">Pickup Location</label>
                        <input type="text" id="pickup" placeholder="Bolga Post Office, City" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <input type="text" id="destination" placeholder="Old Market, City" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="datetime">Date & Time</label>
                        <input type="datetime-local" id="datetime" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="car">Car Type</label>
                        <select id="car" required>
                            <option value="">Select a car</option>
                            <option value="Economy">Economy - ¢25</option>
                            <option value="Comfort">Comfort - ¢35</option>
                            <option value="Business">Business - ¢50</option>
                            <option value="Luxury">Luxury - ¢75</option>
                            <option value="SUV">SUV - ¢60</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn">
                        <i class="fas fa-check-circle"></i>
                        Book Now
                    </button>
                </form>
            </div>

            <div class="admin-panel">
                <h2 class="section-title">
                    <i class="fas fa-tachometer-alt"></i>
                    Admin Dashboard
                </h2>
                
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number" id="totalBookings">0</div>
                        <div class="stat-label">Total Bookings</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" id="pendingBookings">0</div>
                        <div class="stat-label">Pending</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" id="confirmedBookings">0</div>
                        <div class="stat-label">Confirmed</div>
                    </div>
                </div>

                <div class="filter-section">
                    <label style="margin-bottom: 0;">Filter:</label>
                    <select class="filter-select" id="statusFilter">
                        <option value="all">All Bookings</option>
                        <option value="pending">Pending</option>
                        <option value="confirmed">Confirmed</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>

                <div id="bookingsList">
                    <div class="empty-state">
                        <i class="fas fa-calendar-times"></i>
                        <p>No bookings yet</p>
                    </div>
                </div>
                
                <button class="btn btn-secondary" onclick="clearAllBookings()">
                    <i class="fas fa-trash"></i>
                    Clear All Bookings
                </button>
            </div>
        </div>
    </div>

    <script>
        // Initialize bookings from localStorage or empty array
        let bookings = JSON.parse(localStorage.getItem('carBookings')) || [];
        let currentFilter = 'all';

        // Set minimum datetime to current time
        document.getElementById('datetime').min = new Date().toISOString().slice(0, 16);

        // Form submission
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const booking = {
                id: 'BK' + Date.now().toString().slice(-6),
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                email: document.getElementById('email').value,
                pickup: document.getElementById('pickup').value,
                destination: document.getElementById('destination').value,
                datetime: document.getElementById('datetime').value,
                car: document.getElementById('car').value,
                status: 'pending',
                createdAt: new Date().toISOString()
            };
            
            bookings.unshift(booking);
            localStorage.setItem('carBookings', JSON.stringify(bookings));
            
            showNotification('Booking successful! Your booking ID is ' + booking.id, 'success');
            this.reset();
            displayBookings();
            updateStats();
        });

        // Display bookings
        function displayBookings() {
            const bookingsList = document.getElementById('bookingsList');
            
            const filteredBookings = currentFilter === 'all' 
                ? bookings 
                : bookings.filter(booking => booking.status === currentFilter);
            
            if (filteredBookings.length === 0) {
                bookingsList.innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-calendar-times"></i>
                        <p>No ${currentFilter === 'all' ? '' : currentFilter} bookings found</p>
                    </div>
                `;
                return;
            }
            
            bookingsList.innerHTML = '';
            
            filteredBookings.forEach((booking, index) => {
                const bookingItem = document.createElement('div');
                bookingItem.className = 'booking-item';
                
                const date = new Date(booking.datetime);
                const formattedDate = date.toLocaleDateString();
                const formattedTime = date.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
                
                bookingItem.innerHTML = `
                    <div class="booking-header">
                        <span class="booking-id">${booking.id}</span>
                        <span class="booking-status status-${booking.status}">${booking.status}</span>
                    </div>
                    <div class="booking-details">
                        <div><strong><i class="fas fa-user"></i></strong> ${booking.name}</div>
                        <div><strong><i class="fas fa-phone"></i></strong> ${booking.phone}</div>
                        <div><strong><i class="fas fa-map-marker-alt"></i></strong> ${booking.pickup}</div>
                        <div><strong><i class="fas fa-flag-checkered"></i></strong> ${booking.destination}</div>
                        <div><strong><i class="fas fa-calendar"></i></strong> ${formattedDate}</div>
                        <div><strong><i class="fas fa-clock"></i></strong> ${formattedTime}</div>
                        <div><strong><i class="fas fa-car"></i></strong> ${booking.car}</div>
                        <div><strong><i class="fas fa-envelope"></i></strong> ${booking.email}</div>
                    </div>
                    <div class="booking-actions">
                        ${booking.status === 'pending' ? 
                            `<button class="btn btn-small btn-confirm" onclick="updateBookingStatus('${booking.id}', 'confirmed')">
                                <i class="fas fa-check"></i> Confirm
                            </button>
                            <button class="btn btn-small btn-cancel" onclick="updateBookingStatus('${booking.id}', 'cancelled')">
                                <i class="fas fa-times"></i> Cancel
                            </button>` : 
                            booking.status === 'confirmed' ?
                            `<button class="btn btn-small btn-complete" onclick="updateBookingStatus('${booking.id}', 'completed')">
                                <i class="fas fa-flag-checkered"></i> Complete
                            </button>
                            <button class="btn btn-small btn-cancel" onclick="updateBookingStatus('${booking.id}', 'cancelled')">
                                <i class="fas fa-times"></i> Cancel
                            </button>` :
                            `<button class="btn btn-small btn-secondary" onclick="deleteBooking('${booking.id}')">
                                <i class="fas fa-trash"></i> Delete
                            </button>`
                        }
                    </div>
                `;
                
                bookingsList.appendChild(bookingItem);
            });
        }

        // Update booking status
        function updateBookingStatus(id, status) {
            const booking = bookings.find(b => b.id === id);
            if (booking) {
                booking.status = status;
                localStorage.setItem('carBookings', JSON.stringify(bookings));
                displayBookings();
                updateStats();
                showNotification(`Booking ${id} ${status}`, 'info');
            }
        }

        // Delete booking
        function deleteBooking(id) {
            if (confirm('Are you sure you want to delete this booking?')) {
                bookings = bookings.filter(b => b.id !== id);
                localStorage.setItem('carBookings', JSON.stringify(bookings));
                displayBookings();
                updateStats();
                showNotification('Booking deleted successfully', 'success');
            }
        }

        // Clear all bookings
        function clearAllBookings() {
            if (confirm('Are you sure you want to clear all bookings?')) {
                bookings = [];
                localStorage.setItem('carBookings', JSON.stringify(bookings));
                displayBookings();
                updateStats();
                showNotification('All bookings cleared', 'success');
            }
        }

        // Update statistics
        function updateStats() {
            document.getElementById('totalBookings').textContent = bookings.length;
            document.getElementById('pendingBookings').textContent = 
                bookings.filter(b => b.status === 'pending').length;
            document.getElementById('confirmedBookings').textContent = 
                bookings.filter(b => b.status === 'confirmed').length;
        }

        // Filter functionality
        document.getElementById('statusFilter').addEventListener('change', function(e) {
            currentFilter = e.target.value;
            displayBookings();
        });

        // Show notification
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.innerHTML = `
                <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'}"></i>
                ${message}
            `;
            
            document.body.appendChild(notification);
            
            setTimeout(() => notification.classList.add('show'), 100);
            setTimeout(() => {
                notification.classList.remove('show');
                setTimeout(() => document.body.removeChild(notification), 300);
            }, 3000);
        }

        // Initial display
        displayBookings();
        updateStats();
    </script>
</body>
</html>