// ===== SAMPLE DATA =====
let clients = [
    { id: 1, name: "John Doe", phone: "+1 (234) 567-890", email: "john@example.com", notes: "Regular customer, prefers email communication" },
    { id: 2, name: "Jane Smith", phone: "+1 (987) 654-321", email: "jane@example.com", notes: "VIP client, frequent orders" },
    { id: 3, name: "Robert Johnson", phone: "+1 (555) 123-456", email: "robert@example.com", notes: "New client, needs follow-up" },
    { id: 4, name: "Emily Davis", phone: "+1 (444) 789-123", email: "emily@example.com", notes: "Corporate account, billing department contact" }
];

let services = [
    { id: 1, title: "Web Development", description: "Custom website development and design", price: 1200, status: "active" },
    { id: 2, title: "Mobile App Development", description: "iOS and Android app development", price: 2500, status: "active" },
    { id: 3, title: "SEO Optimization", description: "Search engine optimization services", price: 800, status: "active" },
    { id: 4, title: "Social Media Management", description: "Monthly social media management and strategy", price: 500, status: "inactive" }
];

let orders = [
    { id: 1, client_id: 1, service_id: 1, status: "completed", comments: "Completed on time, client satisfied", date: "2023-10-15", amount: 1200 },
    { id: 2, client_id: 2, service_id: 2, status: "pending", comments: "Awaiting client feedback on design", date: "2023-10-18", amount: 2500 },
    { id: 3, client_id: 3, service_id: 3, status: "completed", comments: "Successful campaign, keywords ranking improved", date: "2023-10-10", amount: 800 },
    { id: 4, client_id: 4, service_id: 4, status: "cancelled", comments: "Client cancelled due to budget constraints", date: "2023-10-05", amount: 500 }
];

// ===== DATA FUNCTIONS =====
function getClients() {
    return clients;
}

function getServices() {
    return services;
}

function getOrders() {
    return orders;
}

function addClient(client) {
    const newId = clients.length > 0 ? Math.max(...clients.map(c => c.id)) + 1 : 1;
    client.id = newId;
    clients.push(client);
    return client;
}

function addService(service) {
    const newId = services.length > 0 ? Math.max(...services.map(s => s.id)) + 1 : 1;
    service.id = newId;
    services.push(service);
    return service;
}

function addOrder(order) {
    const newId = orders.length > 0 ? Math.max(...orders.map(o => o.id)) + 1 : 1;
    order.id = newId;
    orders.push(order);
    return order;
}

function deleteClient(id) {
    const index = clients.findIndex(c => c.id === id);
    if (index !== -1) {
        return clients.splice(index, 1)[0];
    }
    return null;
}

function deleteService(id) {
    const index = services.findIndex(s => s.id === id);
    if (index !== -1) {
        return services.splice(index, 1)[0];
    }
    return null;
}

function deleteOrder(id) {
    const index = orders.findIndex(o => o.id === id);
    if (index !== -1) {
        return orders.splice(index, 1)[0];
    }
    return null;
}

function getClientById(id) {
    return clients.find(c => c.id === id);
}

function getServiceById(id) {
    return services.find(s => s.id === id);
}

function getOrderById(id) {
    return orders.find(o => o.id === id);
}

// ===== EXPORT FOR BROWSER =====
if (typeof module !== 'undefined' && module.exports) {
    // Node.js environment
    module.exports = {
        getClients,
        getServices,
        getOrders,
        addClient,
        addService,
        addOrder,
        deleteClient,
        deleteService,
        deleteOrder,
        getClientById,
        getServiceById,
        getOrderById
    };
} else {
    // Browser environment
    window.DataManager = {
        getClients,
        getServices,
        getOrders,
        addClient,
        addService,
        addOrder,
        deleteClient,
        deleteService,
        deleteOrder,
        getClientById,
        getServiceById,
        getOrderById
    };
}
