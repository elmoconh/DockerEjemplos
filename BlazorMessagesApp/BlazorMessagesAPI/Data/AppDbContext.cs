using Microsoft.EntityFrameworkCore;
using BlazorMessagesAPI.Models;

namespace BlazorMessagesAPI.Data
{
    public class AppDbContext : DbContext
    {
        public AppDbContext(DbContextOptions<AppDbContext> options) : base(options) { }

        public DbSet<Message> Messages { get; set; }
    }
}
