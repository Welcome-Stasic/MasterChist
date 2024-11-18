window.tailwind.config = {
    darkMode: ['class'],
    theme: {
        extend: {
            colors: {
                muted: {
                    DEFAULT: 'hsl(var(--muted))',
                    foreground: 'hsl(var(--muted-foreground))'
                },
                card: {
                    DEFAULT: 'hsl(var(--card))',
                    foreground: 'hsl(var(--card-foreground))'
                },
            },
        }
    }
}
