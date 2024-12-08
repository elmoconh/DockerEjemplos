using System.Net.Http.Json;

namespace BlazorMessagesApp.Services
{
    public class MessageService
    {
        private readonly HttpClient _httpClient;

        public MessageService(HttpClient httpClient)
        {
            _httpClient = httpClient;
        }

        public async Task<IEnumerable<Message>> GetMessagesAsync()
        {
            return await _httpClient.GetFromJsonAsync<IEnumerable<Message>>("Messages");
        }

        public async Task SendMessageAsync(Message message)
        {
            await _httpClient.PostAsJsonAsync("Messages", message);
        }
    }

    public class Message
    {
        public int Id { get; set; }
        public string Content { get; set; }
        public DateTime CreatedAt { get; set; }
    }
}
