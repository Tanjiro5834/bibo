@extends('layouts.main')

@section('content')
<div class="col-12 col-lg-expand flex-grow-1" id="ai-tutor-app">
    <div class="d-flex flex-column h-100 bg-white chat-container">
        <div class="p-4 border-bottom d-flex align-items-center justify-content-between chat-header">
            <div class="d-flex align-items-center">
                <div class="bot-icon-container me-3">
                    <i class="bi bi-robot text-white fs-4"></i>
                </div>
                <div>
                    <h5 class="mb-0 fw-bold header-title">Bibo AI Tutor</h5>
                    <div class="d-flex align-items-center">
                        <span class="online-indicator me-2"></span>
                        <small class="text-success fw-bold status-text">ONLINE & READY</small>
                    </div>
                </div>
            </div>
            <div class="header-actions">
                <button class="btn btn-link text-muted p-2 shadow-none"><i class="bi bi-clock-history fs-5"></i></button>
            </div>
        </div>

        <div class="flex-grow-1 p-4 overflow-auto chat-body" id="chat-window">
            <div class="d-flex mb-4 fade-in">
                <div class="bot-avatar-small me-2">
                    <i class="bi bi-robot text-white"></i>
                </div>
                <div class="message-wrapper">
                    <div class="message-bubble bot-bubble shadow-sm">
                        <p class="mb-0">Hello Juan! I'm Bibo, your AI study buddy. What are we learning today? I can help with Math, Science, or English!</p>
                    </div>
                    <small class="timestamp text-muted mt-1 d-block ms-1">10:00 AM</small>
                </div>
            </div>

            <div v-for="msg in messages" :key="msg.id" :class="['d-flex mb-4 fade-in', msg.sender === 'user' ? 'justify-content-end' : '']">
                <div v-if="msg.sender === 'bot'" class="bot-avatar-small me-2">
                    <i class="bi bi-robot text-white"></i>
                </div>
                <div class="message-wrapper" :class="msg.sender === 'user' ? 'text-end' : ''" :style="msg.sender === 'user' ? 'max-width: 80%' : ''">
                    <div :class="['message-bubble', msg.sender === 'user' ? 'user-bubble' : 'bot-bubble border shadow-sm']">
                        <p class="mb-0">@{{ msg.text }}</p>
                    </div>
                    <small class="timestamp text-muted mt-1 d-block mx-1">@{{ msg.time }}</small>
                </div>
            </div>
        </div>

        <div class="p-4 bg-white chat-footer">
            <div class="d-flex flex-wrap justify-content-center gap-2 mb-4 suggestion-container">
                <button @click="setInput('Explain Fractions')" class="suggestion-chip">
                    <i class="bi bi-calculator me-2"></i> Explain Fractions
                </button>
                <button @click="setInput('Check my Grammar')" class="suggestion-chip">
                    <i class="bi bi-spellcheck me-2"></i> Check my Grammar
                </button>
                <button @click="setInput('Science Trivia')" class="suggestion-chip">
                    <i class="bi bi-lightbulb me-2"></i> Science Trivia
                </button>
                <button @click="setInput('Tagalog Translation')" class="suggestion-chip">
                    <i class="bi bi-translate me-2"></i> Tagalog Translation
                </button>
            </div>

            <div class="input-group-container shadow-sm border mx-auto">
                <input
                    type="text"
                    v-model="userInput"
                    @keyup.enter="sendMessage"
                    class="form-control chat-input"
                    placeholder="Ask Bibo anything..."
                >
                <div class="input-actions pe-2">
                    <button class="btn btn-link text-muted p-0 me-3 shadow-none hover-scale"><i class="bi bi-mic fs-5"></i></button>
                    <button @click="sendMessage" class="btn btn-send shadow-sm">
                        <i class="bi bi-send-fill"></i>
                    </button>
                </div>
            </div>
            <div class="text-center mt-3 disclaimer">
                <small class="text-muted text-uppercase">
                     Bibo can make mistakes. Always check with your teacher!
                </small>
            </div>
        </div>
    </div>
</div>

<style>
    .chat-container {
        border-radius: 24px;
        min-height: 85vh;
        overflow: hidden;
        border: 1px solid #eef2ff;
    }
    .header-title { font-family: 'Quicksand', sans-serif; color: #1e293b; }
    .status-text { font-size: 0.75rem; letter-spacing: 0.5px; }
    .online-indicator { width: 8px; height: 8px; background-color: #22c55e; border-radius: 50%; display: inline-block; box-shadow: 0 0 0 2px rgba(34, 197, 94, 0.2); }

    .bot-icon-container { background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%); border-radius: 14px; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2); }
    .bot-avatar-small { background: #4f46e5; border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .bot-avatar-small i { font-size: 0.85rem; }

    .chat-body { background-color: #f8fafc; }
    .message-bubble { padding: 12px 18px; font-size: 0.95rem; line-height: 1.5; max-width: fit-content; }
    .bot-bubble { background: white; border-radius: 0 20px 20px 20px; color: #334155; border: 1px solid #f1f5f9; }
    .user-bubble { background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%); color: white; border-radius: 20px 20px 0 20px; box-shadow: 0 4px 12px rgba(79, 70, 229, 0.15); }
    .timestamp { font-size: 0.65rem; font-weight: 600; opacity: 0.6; }

    .suggestion-chip { background: white; border: 1px solid #e2e8f0; border-radius: 100px; padding: 8px 16px; font-size: 0.85rem; font-weight: 600; color: #475569; transition: all 0.2s ease; display: flex; align-items: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); }
    .suggestion-chip:hover { background: #f1f5f9; border-color: #cbd5e1; transform: translateY(-1px); color: #4f46e5; }

    .input-group-container { max-width: 850px; background: white; border-radius: 100px; display: flex; align-items: center; padding: 6px 6px 6px 12px; transition: border-color 0.2s, box-shadow 0.2s; }
    .input-group-container:focus-within { border-color: #4f46e5 !important; box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1) !important; }
    .chat-input { border: none !important; box-shadow: none !important; background: transparent; font-size: 1rem; padding: 10px 15px; }
    .btn-send { background: #4f46e5; color: white; border-radius: 50%; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; transition: transform 0.2s, background 0.2s; }
    .btn-send:hover { background: #4338ca; transform: scale(1.05); color: white; }
    .hover-scale:hover { transform: scale(1.1); color: #4f46e5 !important; }
    .disclaimer { font-size: 0.65rem; letter-spacing: 1px; }

    #chat-window::-webkit-scrollbar { width: 5px; }
    #chat-window::-webkit-scrollbar-track { background: transparent; }
    #chat-window::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }

    .fade-in { animation: fadeIn 0.3s ease-out forwards; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); }}

    @media (max-width: 768px) {
        .suggestion-chip { font-size: 0.75rem; padding: 6px 12px; }
        .message-bubble { font-size: 0.85rem; }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        new Vue({
            el: '#ai-tutor-app',
            data: {
                userInput: '',
                messages: []
            },
            methods: {
                setInput(val) {
                    this.userInput = val;
                },
                sendMessage() {
                    if (!this.userInput.trim()) return;
                    const now = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                    const text = this.userInput.trim();
                    this.messages.push({ id: Date.now(), text, sender: 'user', time: now });
                    const tempInput = this.userInput;
                    this.userInput = '';
                    this.scrollToBottom();

                    // Send to AI
                    fetch('/tutor/chat', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ message: tempInput })
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.messages.push({
                            id: Date.now() + 1,
                            text: data.response,
                            sender: 'bot',
                            time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })
                        });
                        this.scrollToBottom();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        this.messages.push({
                            id: Date.now() + 1,
                            text: 'Sorry, I couldn\'t process your request right now.',
                            sender: 'bot',
                            time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })
                        });
                        this.scrollToBottom();
                    });
                },
                scrollToBottom() {
                    this.$nextTick(() => {
                        const container = document.getElementById('chat-window');
                        if (container) { container.scrollTo({ top: container.scrollHeight, behavior: 'smooth' }); }
                    });
                }
            }
        });
    });
</script>
@endsection
