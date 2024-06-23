interface HostingPlan {
    name: string;
    price: number;
    storage: string;
    bandwidth: string;
    databases: number;
    emails: number;
}

const hostingPlans: HostingPlan[] = [
    {
        name: "Basic Plan",
        price: 5.99,
        storage: "10 GB",
        bandwidth: "100 GB",
        databases: 1,
        emails: 10
    },
    {
        name: "Pro Plan",
        price: 9.99,
        storage: "50 GB",
        bandwidth: "500 GB",
        databases: 5,
        emails: 50
    },
    // Ajouter d'autres plans d'hébergement selon les besoins
];
