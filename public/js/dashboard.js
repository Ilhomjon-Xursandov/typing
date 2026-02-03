// ===== DASHBOARD FUNCTIONS =====
function renderRecentActivity() {
    const tableBody = document.getElementById('recent-activity');
    if (!tableBody) return;

    tableBody.innerHTML = '';

    const orders = DataManager.getOrders();

    // Sort orders by date (most recent first) and take first 5
    const recentOrders = [...orders]
        .sort((a, b) => new Date(b.date) - new Date(a.date))
        .slice(0, 5);

    recentOrders.forEach(order => {
        const client = DataManager.getClientById(order.client_id);
        const service = DataManager.getServiceById(order.service_id);

        // Format date
        const date = new Date(order.date);
        const formattedDate = date.toLocaleDateString('en-US', {
            month: 'short',
            day: 'numeric',
            year: 'numeric'
        });

        // Status badge
        let statusBadge;
        if (order.status === 'pending') {
            statusBadge = '<span class="status-badge status-pending">Pending</span>';
        } else if (order.status === 'completed') {
            statusBadge = '<span class="status-badge status-completed">Completed</span>';
        } else {
            statusBadge = '<span class="status-badge status-cancelled">Cancelled</span>';
        }

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${client ? client.name : 'Unknown Client'}</td>
            <td>${service ? service.title : 'Unknown Service'}</td>
            <td>${formattedDate}</td>
            <td>${statusBadge}</td>
            <td>$${order.amount}</td>
        `;
        tableBody.appendChild(row);
    });
}

function updateStats() {
    const clients = DataManager.getClients();
    const services = DataManager.getServices();
    const orders = DataManager.getOrders();

    // Update total clients
    const totalClientsEl = document.getElementById('total-clients');
    if (totalClientsEl) {
        totalClientsEl.textContent = clients.length;
    }

    // Calculate monthly revenue (example calculation)
    const completedOrders = orders.filter(o => o.status === 'completed');
    const monthlyRevenue = completedOrders.reduce((sum, order) => sum + order.amount, 0);

    // In a real app, you would update all stats here
    console.log('Stats updated:', {
        clients: clients.length,
        services: services.length,
        orders: orders.length,
        revenue: monthlyRevenue
    });
}

// ===== INITIALIZE DASHBOARD =====
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('dashboard-section')) {
        renderRecentActivity();
        updateStats();
    }
});
