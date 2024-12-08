using BlazorMessagesApp.Services; // Agregar la referencia del servicio MessageService

var builder = WebApplication.CreateBuilder(args);

// Registrar HttpClient para el consumo de la API
builder.Services.AddHttpClient<MessageService>(client =>
{
    client.BaseAddress = new Uri("http://localhost:5000/api/"); // Cambia el puerto según la configuración
});

var app = builder.Build();

app.MapFallbackToPage("/_Host");

app.Run();