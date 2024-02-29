package com.example.demo.entity;

import jakarta.persistence.*;

import java.util.List;

@Entity
public class UserStory {
    @Id
    @GeneratedValue
    private Long id;
    @Column
    private String title;
    @Column
    private String description;
    @Column
    private String acceptance_criteria;
    @Column
    private Long priority;
    @Column
    private String status;
    @ManyToOne
    @JoinColumn(name="user_id")
    private User assigned_to;
    @OneToMany(mappedBy = "userstory_id")
    private List<Task> tasks;

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getAcceptance_criteria() {
        return acceptance_criteria;
    }

    public void setAcceptance_criteria(String acceptance_criteria) {
        this.acceptance_criteria = acceptance_criteria;
    }

    public Long getPriority() {
        return priority;
    }

    public void setPriority(Long priority) {
        this.priority = priority;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public User getAssigned_to() {
        return assigned_to;
    }

    public void setAssigned_to(User assigned_to) {
        this.assigned_to = assigned_to;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Long getId() {
        return id;
    }
}
